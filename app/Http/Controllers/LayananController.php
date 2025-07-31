<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function buatSurat($jenis)
    {
        return view('layanan.template', compact('jenis'));
    }
}
