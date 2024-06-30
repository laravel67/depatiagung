<?php

namespace App\Http\Controllers;


class AdminSettingController extends Controller
{
    public function setDaftar()
    {
        return view('dashboard.settings.register', [
            'title' => 'Pengaturan Pendaftaran'
        ]);
    }
}
