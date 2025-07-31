@extends('layout')

@section('content')
<h2 style="text-align: center; color: #2e8b57;">Template Surat {{ $jenis }}</h2>

<div style="max-width: 600px; margin: 30px auto; padding: 20px;">
    <p>Silakan unduh dan isi template surat berikut untuk keperluan <strong>{{ $jenis }}</strong>:</p>

    <ul style="list-style: disc; padding-left: 20px;">
        <li>
            <a href="{{ asset('template_surat/surat_' . $jenis . '.docx') }}" download>Template Surat {{ $jenis }} (.docx)</a>
        </li>
        <li>
            <a href="{{ asset('template_surat/form_' . $jenis . '.pdf') }}" download>Formulir Tambahan {{ $jenis }} (.pdf)</a>
        </li>
    </ul>

    <a href="{{ url('/layanan-surat') }}">
        <button style="margin-top: 20px; padding: 10px 20px; background-color: #2e8b57; color: white; border: none; border-radius: 4px;">
            Kembali
        </button>
    </a>
</div>
@endsection
