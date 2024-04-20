<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminKesiswaanController extends Controller
{
    public function __construct()
    {
        return view()->share('title', 'Kelola Kesiswaan');
    }

    public function index()
    {
        return view('dashboard.kesiswaan.index');
    }
}
