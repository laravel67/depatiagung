<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanConttoller extends Controller
{
    public function __construct()
    {
        return view()->share('title', 'Data Jabatan');
    }

    public function index()
    {
        return view('dashboard.jabatan');
    }
}
