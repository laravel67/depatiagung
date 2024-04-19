<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;
use App\Models\Daftar;
use App\Models\Student;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadForm($id)
    {
        $data = Student::where('id', $id)->first();
        return view('ppdb.formulir.index', [
            'data' => $data
        ]);
    }
}
