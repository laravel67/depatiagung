<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;
use ZipArchive;
use App\Models\Taj;
use App\Models\Brosur;
use App\Models\Daftar;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function download()
    {
        $form = Taj::latest()->first();
        $brosur = Brosur::latest()->first();
        return view('ppdb.formulir.unduh', compact('form', 'brosur'));
    }

    public function downloadBrosur()
    {
        $brosurDirectory = storage_path('app/public/brosurs');
        dd($brosurDirectory);
        if (file_exists($brosurDirectory)) {
            $files = glob($brosurDirectory . '/*');
            if (!empty($files)) {
                $filePath = $files[1];
                return response()->download($filePath);
            } else {
                return response()->json(['message' => 'Tidak ada file brosur dalam direktori'], 404);
            }
        } else {
            return response()->json(['message' => 'Direktori brosurs tidak ditemukan'], 404);
        }
    }
}
