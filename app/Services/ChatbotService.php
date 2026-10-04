<?php

namespace App\Services;

use App\Models\IbuHamil;
use App\Models\Imunisasi;
use App\Models\Timbangan;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ChatbotService
{
    private const TTL_RIWAYAT = 3600;
    private const MAKS_RIWAYAT = 20;

    public static function n8nAktif(): bool
    {
        return (bool) config('services.n8n.webhook_url');
    }

    public static function balas(string $sessionId, string $pesan): array
    {
        $riwayat = self::riwayat($sessionId);

        $jawaban = null;
        $sumber = 'bot';

        if (self::n8nAktif()) {
            try {
                $res = Http::timeout(15)->post(config('services.n8n.webhook_url'), [
                    'session_id' => $sessionId,
                    'message' => $pesan,
                    'history' => $riwayat,
                    'context' => 'posyandu',
                ]);
                if ($res->successful() && filled($res->json('reply'))) {
                    $jawaban = (string) $res->json('reply');
                    $sumber = 'n8n';
                }
            } catch (\Throwable) {
                // n8n tidak terjangkau — pakai bot bawaan
            }
        }

        $jawaban ??= self::botBawaan($pesan);

        $riwayat[] = ['role' => 'user', 'text' => $pesan];
        $riwayat[] = ['role' => 'bot', 'text' => $jawaban];
        $riwayat = array_slice($riwayat, -self::MAKS_RIWAYAT);
        Cache::put('chat:' . $sessionId, $riwayat, self::TTL_RIWAYAT);

        return ['reply' => $jawaban, 'source' => $sumber, 'history' => $riwayat];
    }

    public static function riwayat(string $sessionId): array
    {
        return Cache::get('chat:' . $sessionId, []);
    }

    /** Bot aturan khusus layanan posyandu — selalu tersedia tanpa n8n. */
    private static function botBawaan(string $pesan): string
    {
        $p = Str::lower($pesan);

        return match (true) {
            Str::contains($p, ['halo', 'hai', 'hi', 'assalamu', 'pagi', 'siang', 'sore', 'malam']) =>
                'Halo! 👋 Saya asisten Posyandu. Tanyakan tentang "imunisasi", "ibu hamil", "penimbangan", "statistik", atau ketik "bantuan".',

            Str::contains($p, ['statistik', 'jumlah', 'berapa']) => sprintf(
                "Data posyandu saat ini:\n• %d warga terdaftar\n• %d data ibu hamil\n• %d catatan imunisasi\n• %d catatan penimbangan",
                User::where('role', 'User')->count(), IbuHamil::count(), Imunisasi::count(), Timbangan::count()
            ),

            Str::contains($p, ['imunisasi', 'vaksin']) =>
                "Layanan imunisasi dasar di posyandu meliputi BCG, Polio, DPT, Campak, dan Hepatitis B sesuai jadwal usia anak. 💉\nRiwayat imunisasi anak Anda bisa dilihat di menu Data Imunisasi setelah masuk. Untuk jadwal bulan ini, silakan hubungi kader posyandu.",

            Str::contains($p, ['hamil', 'kehamilan', 'bumil']) =>
                "Untuk ibu hamil, posyandu melayani pemeriksaan rutin, pencatatan perkembangan kehamilan, dan edukasi gizi. 🤰\nDaftarkan diri melalui kader, lalu pantau data Anda di menu Data Ibu Hamil.",

            Str::contains($p, ['timbang', 'berat', 'tumbuh kembang', 'gizi']) =>
                "Penimbangan rutin memantau tumbuh kembang anak (berat & tinggi badan) setiap bulan. ⚖️\nHasilnya tercatat di menu Data Penimbangan — pastikan hadir setiap jadwal ya!",

            Str::contains($p, ['jadwal', 'kapan', 'buka']) =>
                'Jadwal kegiatan posyandu diumumkan oleh kader setiap bulannya. 🗓️ Silakan hubungi kader posyandu setempat atau pantau pengumuman di balai desa.',

            Str::contains($p, ['daftar', 'registrasi', 'akun']) =>
                'Untuk mendaftar: klik tombol "Masuk" lalu pilih registrasi, atau datang langsung ke kader posyandu untuk didaftarkan. 📝',

            Str::contains($p, ['bantuan', 'help', 'menu']) =>
                "Saya bisa bantu menjawab:\n• \"statistik\" — jumlah data terkini\n• \"imunisasi\" — info layanan imunisasi\n• \"ibu hamil\" — layanan kehamilan\n• \"penimbangan\" — tumbuh kembang anak\n• \"jadwal\" — kegiatan posyandu\n• \"daftar\" — cara registrasi",

            Str::contains($p, ['terima kasih', 'makasih', 'thanks']) =>
                'Sama-sama! Semoga sehat selalu sekeluarga. 💚',

            default =>
                'Maaf, saya belum paham pertanyaannya. Ketik "bantuan" untuk melihat topik yang bisa saya jawab ya. 🙂',
        };
    }
}
