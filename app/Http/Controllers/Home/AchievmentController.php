<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Achievment;

class AchievmentController extends Controller
{
    public function akademik()
    {
        $akdemiks = Achievment::orderBy('id', 'desc')->where('category', 'akademik')->paginate(10);
        return view('home.achievments.akademik', [
            'title' => 'Pencapaian/Prestasi Akademik',
            'posts' => $akdemiks
        ]);
    }

    public function nonakademik()
    {
        $akdemiks = Achievment::orderBy('id', 'desc')->where('category', 'nonakademik')->paginate(10);
        return view('home.achievments.non-akademik', [
            'title' => 'Pencapaian/Prestasi Non Akademi',
            'posts' =>  $akdemiks
        ]);
    }

    public function student()
    {
        $akdemiks = Achievment::orderBy('id', 'desc')->where('category', 'student')->paginate(10);
        return view('home.kesiswaan.prestasi-siswa', [
            'title' => 'Pencapaian/Prestasi Santri/Wati',
            'posts' =>  $akdemiks
        ]);
    }
}
