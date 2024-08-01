<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function struktur()
    {
        view()->share('title', 'Kelola Struktur Depati Agung');
        return view('dashboard.struktur');
    }

    public function bidang()
    {
        view()->share('title', 'Data Bidang');
        return view('dashboard.bidang');
    }

    public function jabatan()
    {
        view()->share('title', 'Data Jabatan');
        return view('dashboard.jabatan');
    }

    public function Persada()
    {
        view()->share('title', 'Data Persada Depati Agung');
        return view('dashboard.persada');
    }
}
