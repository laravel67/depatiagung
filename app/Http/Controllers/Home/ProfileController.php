<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function identitas()
    {
        return view('home.profile.identitas', [
            'title' => 'Identitas'
        ]);
    }

    public function struktur()
    {
        return view('home.profile.struktur', [
            'title' => 'Struktur Organisasi'
        ]);
    }

    public function sejarah()
    {
        return view('home.profile.sejarah', [
            'title' => 'Sejarah'
        ]);
    }

    public function visi()
    {
        return view('home.profile.visi-misi', [
            'title' => 'Visi, Misi & Motto'
        ]);
    }
}
