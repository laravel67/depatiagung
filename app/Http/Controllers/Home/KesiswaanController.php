<?php

namespace App\Http\Controllers\Home;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lifeskill;

class KesiswaanController extends Controller
{
    public function lifeskill()
    {
        view()->share('title', 'Ekstra Kulikuler'); 
        $fisik = Lifeskill::where('category', 'fisik')->orderBy('id', 'desc')->get();
        $nonfisik = Lifeskill::where('category', 'nonfisik')->orderBy('id', 'desc')->get();
        return view('home.kesiswaan.lifeskill', compact('fisik', 'nonfisik'));
    }

    public function album()
    {
        view()->share('title', 'Album Foto');
        $posts = Galeri::orderBy('id', 'desc')->paginate(12);
        return view('home.kesiswaan.galery', compact('posts'));
    }
}
