<?php

namespace App\Http\Controllers\Home;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\Sambutan;

class HomeController extends Controller
{
    public function home()
    {
        $title = 'Beranda';
        $posts = Post::orderBy('id', 'desc')->take(6)->get();
        $sambutan = Sambutan::latest()->first();
        $galeri = Galeri::orderBy('id', 'desc')->take(5)->get();
        return view('home.index', compact('posts', 'title', 'sambutan', 'galeri'));
    }
}
