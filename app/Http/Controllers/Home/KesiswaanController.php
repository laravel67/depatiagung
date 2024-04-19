<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KesiswaanController extends Controller
{
    public function lifeskill()
    {
        $title = "Ekstra Kulikuler";
        return view('home.kesiswaan.lifeskill', compact('title'));
    }
}
