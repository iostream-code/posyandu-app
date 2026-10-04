<?php

namespace App\Http\Controllers;

use App\Services\ChatbotService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class ChatbotController extends Controller
{
    public function kirim(Request $request)
    {
        $data = $request->validate([
            'session_id' => 'required|string|max:64',
            'message' => 'required|string|max:1000',
        ]);

        $kunci = 'chat-limit:' . $data['session_id'];
        if (!RateLimiter::attempt($kunci, 20, fn() => true, 60)) {
            return response()->json([
                'success' => false,
                'message' => 'Terlalu banyak pesan, coba lagi sebentar lagi ya.',
            ], 429);
        }

        $hasil = ChatbotService::balas($data['session_id'], trim($data['message']));

        return response()->json([
            'success' => true,
            'reply' => $hasil['reply'],
            'source' => $hasil['source'],
            'history' => $hasil['history'],
        ]);
    }

    public function riwayat(string $sessionId)
    {
        return response()->json([
            'success' => true,
            'history' => ChatbotService::riwayat($sessionId),
            'n8n' => ChatbotService::n8nAktif(),
        ]);
    }
}
