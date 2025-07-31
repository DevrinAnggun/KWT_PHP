@extends('layout')

@section('content')
<h2 style="text-align: center; color: #2e8b57;">Layanan Kelurahan Karangtengah</h2>

<style>
    .layanan-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        max-width: 900px;
        margin: 40px auto;
    }

    .layanan-item {
        text-align: center;
        cursor: pointer;
    }

    .layanan-item img {
        border-radius: 50%;
        width: 90px;
        height: 90px;
        object-fit: cover;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        background-color: #f0f0f0;
        padding: 10px;
    }

    .layanan-item p {
        margin-top: 8px;
        color: black;
    }

    /* MODAL */
    .modal {
        display: none;
        position: fixed;
        z-index: 999;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.6);
    }

    .modal-content {
        background: white;
        padding: 30px;
        border-radius: 8px;
        max-width: 400px;
        margin: 10% auto;
        text-align: center;
    }

    .modal-content button {
        margin-top: 10px;
        padding: 10px 20px;
        border-radius: 4px;
        border: none;
        color: white;
        background-color: #2e8b57;
        cursor: pointer;
    }

    .modal-content a button.gray {
        background-color: gray;
    }

    .modal-content .close-btn {
        background-color: #c0392b;
    }
</style>

<!-- GRID LAYANAN -->
<div class="layanan-grid">
    @foreach([
        ['img' => 'ktp.png', 'label' => 'KTP'],
        ['img' => 'kk.png', 'label' => 'KK'],
        ['img' => 'akta_lahir.png', 'label' => 'Akta Lahir'],
        ['img' => 'akta_kematian.png', 'label' => 'Akta Kematian'],
        ['img' => 'nikah.png', 'label' => 'Nikah'],
        ['img' => 'skck.png', 'label' => 'SKCK'],
        ['img' => 'pindah.png', 'label' => 'Pindah'],
        ['img' => 'usaha.png', 'label' => 'Usaha'],
    ] as $item)
        <div class="layanan-item" onclick="openModal('{{ $item['label'] }}')">
            <img src="{{ asset('img/' . $item['img']) }}" alt="{{ $item['label'] }}">
            <p>{{ $item['label'] }}</p>
        </div>
    @endforeach
</div>

<!-- MODAL -->
<div id="layananModal" class="modal">
    <div class="modal-content">
        <h3 id="modalTitle">Layanan</h3>
        <p>Pilih tindakan berikut:</p>
        <a id="buatSuratBtn" href="#"><button>Buat Surat</button></a><br>
        <a id="lihatSyaratBtn" href="#"><button class="gray">Lihat Syarat</button></a><br>
        <button onclick="closeModal()" class="close-btn">Tutup</button>
    </div>
</div>

<script>
    const modal = document.getElementById('layananModal');
    const modalTitle = document.getElementById('modalTitle');
    const buatBtn = document.getElementById('buatSuratBtn');
    const syaratBtn = document.getElementById('lihatSyaratBtn');

    function openModal(label) {
        modal.style.display = 'block';
        modalTitle.textContent = label;
        const slug = label.toLowerCase().replace(/\s+/g, '_');
        buatBtn.href = `/layanan/${slug}/buat`;
        syaratBtn.href = `/layanan/${slug}/syarat`;
    }

    function closeModal() {
        modal.style.display = 'none';
    }

    window.onclick = function(e) {
        if (e.target == modal) closeModal();
    }
</script>
@endsection
