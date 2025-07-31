@extends('layout')

@section('content')
<h2 style="text-align: center; color: #2e8b57;">Template Surat {{ ucfirst($jenis) }}</h2>

<style>
    .file-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
        max-width: 500px;
        margin: 30px auto;
    }

    .file-item {
        display: flex;
        align-items: center;
        background-color: #f4f4f4;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: background-color 0.3s ease;
    }

    .file-item:hover {
        background-color: #e9f7ef;
    }

    .file-item a {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #2e8b57;
        font-weight: bold;
        font-size: 16px;
    }

    .file-item img {
        width: 40px;
        height: 40px;
        margin-right: 15px;
    }

    .back-button {
        display: block;
        margin: 30px auto;
        padding: 10px 20px;
        background-color: #2e8b57;
        color: white;
        border: none;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        width: fit-content;
    }
</style>

<div class="file-list">
    <div class="file-item">
        <a href="{{ asset('template_surat/surat_' . $jenis . '.docx') }}" target="_blank">
            <img src="{{ asset('img/word.png') }}" alt="Word Icon">
            Template Surat {{ ucfirst($jenis) }} (.docx)
        </a>
    </div>
    <div class="file-item">
        <a href="{{ asset('template_surat/form_' . $jenis . '.pdf') }}" target="_blank">
            <img src="{{ asset('img/pdf.png') }}" alt="PDF Icon">
            Formulir Tambahan {{ ucfirst($jenis) }} (.pdf)
        </a>
    </div>
</div>

<a href="{{ url('/layanan-surat') }}" class="back-button">← Kembali ke Layanan</a>
@endsection
