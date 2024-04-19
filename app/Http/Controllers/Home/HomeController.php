<?php

namespace App\Http\Controllers\Home;

use App\Models\Post;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $title = 'Beranda';
        $posts = Post::orderBy('id', 'desc')->take(6)->get();
        return view('home.index', compact('posts', 'title'));
    }
}
