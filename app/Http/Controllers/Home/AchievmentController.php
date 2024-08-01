<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Achievment;

class AchievmentController extends Controller
{
    public function akademik()
    {
        view()->share('title', 'Pencapaian/Prestasi Akademik');
        $akdemiks = Achievment::orderBy('id', 'desc')->where('category', 'akademik')->paginate(10);
        return view('home.achievments.akademik', [
            'posts' => $akdemiks
        ]);
    }

    public function nonakademik()
    {
        view()->share('title', 'Pencapaian/Prestasi Non Akademi');
        $akdemiks = Achievment::orderBy('id', 'desc')->where('category', 'nonakademik')->paginate(10);
        return view('home.achievments.non-akademik', [
            'posts' =>  $akdemiks
        ]);
    }

    public function student()
    {
        view()->share('title', 'Pencapaian/Prestasi Santri/Wati');
        $akdemiks = Achievment::orderBy('id', 'desc')->where('category', 'student')->paginate(10);
        return view('home.kesiswaan.prestasi-siswa', [
            'posts' =>  $akdemiks
        ]);
    }

    public function persada()
    {
        view()->share('title', 'Struktur Organisasi Santri');
        return view('home.kesiswaan.persada');
    }
}
