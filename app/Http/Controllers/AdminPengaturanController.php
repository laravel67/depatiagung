<?php

namespace App\Http\Controllers;

class AdminPengaturanController extends Controller
{
    public function __construct()
    {
        return view()->share('title', 'Pengaturan Umum');
    }

    public function index()
    {
        return view('dashboard.pengaturan');
    }
}
