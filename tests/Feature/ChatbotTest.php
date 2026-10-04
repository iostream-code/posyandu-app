<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ChatbotTest extends TestCase
{
    use RefreshDatabase;

    public function test_bot_menjawab_sapaan(): void
    {
        $res = $this->postJson('/chatbot', ['session_id' => 's1', 'message' => 'halo']);
        $res->assertOk()->assertJsonPath('source', 'bot');
        $this->assertStringContainsString('asisten Posyandu', $res->json('reply'));
    }

    public function test_bot_menjawab_statistik(): void
    {
        $res = $this->postJson('/chatbot', ['session_id' => 's2', 'message' => 'statistik']);
        $this->assertStringContainsString('warga terdaftar', $res->json('reply'));
    }

    public function test_bot_menjawab_topik_imunisasi(): void
    {
        $res = $this->postJson('/chatbot', ['session_id' => 's3', 'message' => 'info imunisasi dong']);
        $this->assertStringContainsString('imunisasi', strtolower($res->json('reply')));
    }

    public function test_riwayat_tersimpan(): void
    {
        $this->postJson('/chatbot', ['session_id' => 's4', 'message' => 'halo']);
        $this->getJson('/chatbot/s4')->assertOk()->assertJsonCount(2, 'history');
    }

    public function test_validasi_pesan_kosong(): void
    {
        $this->postJson('/chatbot', ['session_id' => 's5', 'message' => ''])->assertStatus(422);
    }
}
