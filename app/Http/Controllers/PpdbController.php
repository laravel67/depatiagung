<?php

namespace App\Http\Controllers;

use App\Models\Brosur;
use App\Models\Taj;

class PpdbController extends Controller
{
    public function home()
    {
        $brosur = Taj::orderBy('id', 'desc')->first();
        return view('ppdb.index', compact('brosur'));
    }

    public function daftar()
    {
        return view('ppdb.daftar');
    }

    public function profileRegister()
    {
        return view('ppdb.akun');
    }
}
