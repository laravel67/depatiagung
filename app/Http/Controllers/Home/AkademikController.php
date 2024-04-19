<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Sarana;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function kurikulum()
    {
        return view('home.akademik.kurikulum', [
            'title' => 'Kurikulum'
        ]);
    }
    public function sarana()
    {
        $saranas = Sarana::orderBy('id', 'desc')->get();
        return view('home.akademik.sarana-prasarana', [
            'title' => 'Sarana Prasarana Pembelaran',
            'saranas' => $saranas
        ]);
    }

    public function biografi()
    {
        $gurus = Guru::orderBy('id', 'desc')->get();
        return view('home.akademik.biografi', [
            'title' => 'Biografi Tenaga Pengajar',
            'gurus' => $gurus
        ]);
    }
}
