<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Sambutan;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function identitas()
    {
        view()->share('title', 'Identitas');
        return view('home.profile.identitas');
    }

    public function struktur()
    {
        view()->share('title', 'Struktur Organisasi');
        return view('home.profile.struktur');
    }

    public function sejarah()
    {
        view()->share('title', 'Sejarah');
        return view('home.profile.sejarah');
    }

    public function visi()
    {
        view()->share('title', 'Visi, Misi & Motto');
        return view('home.profile.visi-misi');
    }

    public function sambutan()
    {
        view()->share('title', 'Kata Sambutan Pimpinan PPS Depati Agung');
        return view('home.profile.sambutan', [
            'sambutan' => Sambutan::latest()->first()
        ]);
    }
}
