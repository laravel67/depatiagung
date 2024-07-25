<?php

namespace App\Http\Controllers;


class AdminKesiswaanController extends Controller
{
    public function index()
    {
        view()->share('title', 'Data Ekstra Kulikuler');
        return view('dashboard.kesiswaan.index');
    }
}
