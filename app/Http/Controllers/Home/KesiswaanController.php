<?php

namespace App\Http\Controllers\Home;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KesiswaanController extends Controller
{
    public function lifeskill()
    {
        $title = "Ekstra Kulikuler";
        return view('home.kesiswaan.lifeskill', compact('title'));
    }

    public function album()
    {
        $posts = Galeri::orderBy('id', 'desc')->paginate(12);
        $title = 'Album Foto';
        return view('home.kesiswaan.galery', compact('title', 'posts'));
    }
}
