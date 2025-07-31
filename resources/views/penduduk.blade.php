@extends('layout')

@section('content')
<h2 style="text-align: center; color: #2e8b57;">Wilayah Kelurahan Karangtengah</h2>

<div style="display: flex; flex-wrap: wrap; justify-content: center; margin-top: 20px; gap: 30px;">

    <!-- MAPS -->
    <div style="flex: 1 1 500px; max-width: 600px;">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.473491537136!2d109.67981307413848!3d-7.407694092602726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa948af060ff3%3A0x1dbd9e7ed8bb19aa!2sKelurahan%20Karangtengah!5e0!3m2!1sid!2sid!4v1722400000000!5m2!1sid!2sid" 
            width="100%" 
            height="400" 
            style="border:1px solid #ccc; border-radius: 8px;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <!-- DATA PENDUDUK -->
    <div style="flex: 1 1 300px; max-width: 400px; background-color: #f9f9f9; border: 1px solid #ccc; border-radius: 8px; padding: 20px;">
        <h3 style="margin-bottom: 10px;">📋 Data Penduduk</h3>
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td><strong>Kabupaten/Kota</strong></td>
                <td>: Banjarnegara</td>
            </tr>
            <tr>
                <td><strong>Kecamatan</strong></td>
                <td>: Banjarnegara</td>
            </tr>
            <tr>
                <td><strong>Kelurahan</strong></td>
                <td>: Karangtengah</td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><strong>Jumlah Penduduk</strong></td>
                <td>: 6.800</td>
            </tr>
            <tr>
                <td>Laki-laki</td>
                <td>: 3.400</td>
            </tr>
            <tr>
                <td>Perempuan</td>
                <td>: 3.400</td>
            </tr>
            <tr>
                <td>Kepala Keluarga</td>
                <td>: 2.200</td>
            </tr>
            <tr>
                <td>Perpindahan</td>
                <td>: 50</td>
            </tr>
            <tr>
                <td>Meninggal</td>
                <td>: 20</td>
            </tr>
        </table>
    </div>

</div>
@endsection
