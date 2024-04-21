<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;
use App\Models\Daftar;
use App\Models\Student;
use App\Models\Taj;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadForm($id)
    {
        $data = Student::where('id', $id)->first();
        $penitia = Taj::latest()->first();
        return view('ppdb.formulir.index', [
            'data' => $data,
            'penitia' => $penitia
        ]);
    }
}
