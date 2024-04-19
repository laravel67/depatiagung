<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    public function setDaftar()
    {
        return view('dashboard.settings.register', [
            'title' => 'Pengaturan Pendaftaran'
        ]);
    }
}
