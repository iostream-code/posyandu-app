{{-- Widget Chatbot Posyandu — sertakan sebelum </body> --}}
<style>
    #cb-bubble { position: fixed; bottom: 24px; right: 24px; width: 58px; height: 58px; border-radius: 50%;
        background: #10b981; color: #fff; border: none; font-size: 24px; z-index: 1050;
        box-shadow: 0 .5rem 1rem rgba(16,185,129,.4); cursor: pointer; }
    #cb-panel { position: fixed; bottom: 94px; right: 24px; width: 340px; height: 440px; z-index: 1050;
        background: #fff; border-radius: 16px; box-shadow: 0 1rem 2.5rem rgba(0,0,0,.2);
        display: none; flex-direction: column; overflow: hidden; font-family: inherit; }
    #cb-panel.buka { display: flex; }
    #cb-head { background: #10b981; color: #fff; padding: .7rem 1rem; font-weight: 700;
        display: flex; justify-content: space-between; align-items: center; }
    #cb-badge { background: #fff; color: #059669; font-size: .7rem; font-weight: 700;
        padding: .15rem .5rem; border-radius: 999px; }
    #cb-isi { flex: 1; overflow-y: auto; padding: 1rem; background: #f8fafc; }
    .cb-baris { display: flex; margin-bottom: .5rem; }
    .cb-baris.kanan { justify-content: flex-end; }
    .cb-pesan { max-width: 85%; padding: .5rem .8rem; border-radius: 14px; font-size: .85rem; white-space: pre-wrap; }
    .cb-baris.kanan .cb-pesan { background: #10b981; color: #fff; }
    .cb-baris:not(.kanan) .cb-pesan { background: #fff; border: 1px solid #e2e8f0; }
    #cb-form { display: flex; gap: .5rem; padding: .6rem; border-top: 1px solid #e2e8f0; background: #fff; }
    #cb-input { flex: 1; border: 1px solid #cbd5e1; border-radius: 10px; padding: .45rem .7rem; font-size: .85rem; outline: none; }
    #cb-input:focus { border-color: #10b981; }
    #cb-kirim { background: #10b981; color: #fff; border: none; border-radius: 10px; padding: 0 .9rem; font-weight: 700; cursor: pointer; }
    #cb-sambut { text-align: center; color: #64748b; font-size: .8rem; margin-top: 2rem; }
</style>

<button id="cb-bubble" title="Tanya Asisten Posyandu" aria-label="Buka chat">💬</button>
<div id="cb-panel" role="dialog" aria-label="Chat Asisten Posyandu">
    <div id="cb-head">
        <span>🩺 Asisten Posyandu</span>
        <span id="cb-badge">bot</span>
    </div>
    <div id="cb-isi">
        <div id="cb-sambut">Halo! 👋 Tanyakan jadwal, imunisasi,<br>ibu hamil, atau ketik <em>"bantuan"</em>.</div>
    </div>
    <form id="cb-form">
        <input id="cb-input" placeholder="Tulis pertanyaan..." autocomplete="off" maxlength="1000">
        <button id="cb-kirim" type="submit">➤</button>
    </form>
</div>

<script>
(function () {
    const bubble = document.getElementById('cb-bubble');
    const panel = document.getElementById('cb-panel');
    const isi = document.getElementById('cb-isi');
    const form = document.getElementById('cb-form');
    const input = document.getElementById('cb-input');
    const badge = document.getElementById('cb-badge');
    const csrf = document.querySelector('meta[name="csrf-token"]')?.content ?? '{{ csrf_token() }}';

    let sesi = localStorage.getItem('cb_sesi');
    if (!sesi) {
        sesi = 's-' + Math.random().toString(36).slice(2) + Date.now().toString(36);
        localStorage.setItem('cb_sesi', sesi);
    }

    function tampilkan(riwayat) {
        isi.querySelectorAll('.cb-baris').forEach((e) => e.remove());
        const sambut = document.getElementById('cb-sambut');
        if (sambut) sambut.style.display = riwayat.length ? 'none' : '';
        riwayat.forEach((m) => tambah(m.role, m.text));
    }

    function tambah(role, teks) {
        const baris = document.createElement('div');
        baris.className = 'cb-baris' + (role === 'user' ? ' kanan' : '');
        const p = document.createElement('div');
        p.className = 'cb-pesan';
        p.textContent = teks;
        baris.appendChild(p);
        isi.appendChild(baris);
        isi.scrollTop = isi.scrollHeight;
        const sambut = document.getElementById('cb-sambut');
        if (sambut) sambut.style.display = 'none';
    }

    bubble.addEventListener('click', () => {
        panel.classList.toggle('buka');
        bubble.textContent = panel.classList.contains('buka') ? '✕' : '💬';
        if (panel.classList.contains('buka')) {
            fetch('{{ url('/chatbot') }}/' + sesi)
                .then((r) => r.json())
                .then((d) => { tampilkan(d.history ?? []); badge.textContent = d.n8n ? 'n8n' : 'bot'; })
                .catch(() => {});
            input.focus();
        }
    });

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const teks = input.value.trim();
        if (!teks) return;
        input.value = '';
        tambah('user', teks);
        tambah('bot', '…');
        try {
            const r = await fetch('{{ url('/chatbot') }}', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrf, 'Accept': 'application/json' },
                body: JSON.stringify({ session_id: sesi, message: teks }),
            });
            const d = await r.json();
            isi.lastElementChild.remove(); // hapus "…"
            tambah('bot', d.reply ?? d.message ?? 'Maaf, terjadi gangguan.');
        } catch {
            isi.lastElementChild.remove();
            tambah('bot', 'Maaf, server tidak merespons. Coba lagi ya.');
        }
    });
})();
</script>
