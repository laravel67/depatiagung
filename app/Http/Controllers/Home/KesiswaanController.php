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
        $title = "Ekstra Kulikuler";
        $fisik = Lifeskill::where('category', 'fisik')->orderBy('id', 'desc')->get();
        $nonfisik = Lifeskill::where('category', 'nonfisik')->orderBy('id', 'desc')->get();
        return view('home.kesiswaan.lifeskill', compact('title', 'fisik', 'nonfisik'));
    }

    public function album()
    {
        $posts = Galeri::orderBy('id', 'desc')->paginate(12);
        $title = 'Album Foto';
        return view('home.kesiswaan.galery', compact('title', 'posts'));
    }
}
