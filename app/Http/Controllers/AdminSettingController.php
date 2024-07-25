<?php

namespace App\Http\Controllers;


class AdminSettingController extends Controller
{
    public function __construct()
    {
        return view()->share('title', 'Pengaturan Pendaftaran');
    }

    public function setDaftar()
    {
        return view('dashboard.settings.register');
    }
}
