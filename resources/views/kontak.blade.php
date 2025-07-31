@extends('layout')

@section('content')
<h2 style="text-align: center; color: #2e8b57;">Kontak Kelurahan Karangtengah</h2>

<div style="display: flex; flex-wrap: wrap; justify-content: center; margin-top: 30px; gap: 40px;">

    <!-- Info Kontak -->
    <div style="flex: 1 1 300px; max-width: 400px; background-color: #f0f0f0; padding: 20px; border-radius: 8px;">
        <h3>📍 Alamat</h3>
        <p>Jl. Raya Karangtengah No. 1<br>Banjarnegara, Jawa Tengah 53412</p>

        <h3>📞 Telepon</h3>
        <p>(0286) 123456</p>

        <h3>✉️ Email</h3>
        <p>kelurahan@karangtengah.go.id</p>
    </div>

    <!-- Form Kontak -->
    <div style="flex: 1 1 400px; max-width: 500px;">
        <h3>Formulir Kontak</h3>
        <form method="POST" action="#">
            @csrf
            <div style="margin-bottom: 15px;">
                <label for="nama">Nama:</label><br>
                <input type="text" id="nama" name="nama" required style="width: 100%; padding: 8px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required style="width: 100%; padding: 8px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="pesan">Pesan:</label><br>
                <textarea id="pesan" name="pesan" rows="5" required style="width: 100%; padding: 8px;"></textarea>
            </div>
            <button type="submit" style="background-color: #2e8b57; color: white; padding: 10px 20px; border: none; border-radius: 4px;">
                Kirim Pesan
            </button>
        </form>
    </div>

</div>
@endsection
