<?php

namespace App\Http\Controllers;

use App\Models\Brosur;
use App\Models\Register;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function home()
    {
        $brosurs = Brosur::orderBy('id', 'desc')->first();
        if ($brosurs) {
            $images = json_decode($brosurs->images);
        } else {
            $images = [];
        }
        return view('ppdb.index', compact('images'));
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
