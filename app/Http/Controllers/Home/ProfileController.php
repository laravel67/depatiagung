<?php

namespace App\Http\Controllers\Home;

use App\Models\Bidang;
use App\Models\Sambutan;
use App\Models\Struktur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Guru;

class ProfileController extends Controller
{
    public function identitas()
    {
        view()->share('title', 'Identitas');
        return view('home.profile.identitas');
    }

    public function struktur()
    {
        view()->share('title', 'Struktur Organisasi');
        $yayasan = Bidang::where('name', 'YAYASAN')->first();
        $pimpinan = Bidang::where('name', 'PIMPINAN')->first();
        $kabagTu = Bidang::where('name', 'KABAG TU')->first();
        $bendahara = Bidang::where('name', 'BENDAHARA')->first();
        $pengasuhPutra = Bidang::where('name', 'PENGASUH PUTRA')->first();
        $pengasuhPutri = Bidang::where('name', 'PENGASUH PUTRI')->first();
        $kamadMas = Bidang::where('name', 'KAMAD MAS')->first();
        $kamadMts = Bidang::where('name', 'KAMAD MTS')->first();
        $bidPendidikan = Bidang::where('name', 'BID PENDIDIKAN')->first();
        $bidPrasarana = Bidang::where('name', 'BID PRASARANA')->first();
        $bidKesiswaan = Bidang::where('name', 'BID KESISWAAN')->first();
        $bidKesehatan = Bidang::where('name', 'BID KESEHATAN')->first();
        $teachers = Guru::all();

        return view('home.profile.struktur', compact(
            'yayasan',
            'pimpinan',
            'kabagTu',
            'bendahara',
            'pengasuhPutra',
            'pengasuhPutri',
            'kamadMas',
            'kamadMts',
            'bidPendidikan',
            'bidPrasarana',
            'bidKesiswaan',
            'bidKesehatan',
            'teachers'
        ));
    }

    public function sejarah()
    {
        view()->share('title', 'Sejarah');
        return view('home.profile.sejarah');
    }

    public function visi()
    {
        view()->share('title', 'Visi, Misi & Motto');
        return view('home.profile.visi-misi');
    }

    public function sambutan()
    {
        view()->share('title', 'Kata Sambutan Pimpinan PPS Depati Agung');
        return view('home.profile.sambutan', [
            'sambutan' => Sambutan::latest()->first()
        ]);
    }
}
