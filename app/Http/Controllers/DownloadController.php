<?php

namespace App\Http\Controllers;
use App\Models\Taj;
use App\Models\Student;

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
        $brosur = Taj::latest()->first();
        return view('ppdb.formulir.unduh', compact('brosur'));
    }

    public function downloadBrosur(int $id)
    {
        // Cari brosur berdasarkan ID
        $brosur = Taj::find($id);

        if ($brosur && $brosur->image) {
            $filePath = storage_path('app/public/brosurs/' . $brosur->image);

            if (file_exists($filePath)) {
                return response()->download($filePath);
            } else {
                return response()->json(['message' => 'File brosur tidak ditemukan'], 404);
            }
        } else {
            return response()->json(['message' => 'Brosur tidak tersedia'], 404);
        }
    }

}
