<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminStudentController extends Controller
{
    public function __construct()
    {
        return view()->share('title', 'Data Pendaftaran');
    }
    public function index()
    {
        return view('dashboard.daftar.index');
    }
    public function show(Student $student)
    {
        return view('dashboard.daftar.show', compact('student'));
    }
    public function edit(Student $student)
    {
        return view('dashboard.daftar.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $rules = [
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'agama' => 'required|in:Islam,Katolik,Protestan,Hindu,Budha,Lainya',
            'kewarganegaraan' => 'required|in:WNI,WNA',
            'negara' => 'required|string',
            'kecamatan' => 'required|string',
            'kabupaten' => 'required|string',
            'provinsi' => 'required|string',
            'kode_pos' => 'required|string',
            'alamat' => 'required|string',
            'nama_ayah' => 'required|string',
            'nama_ibu' => 'required|string',
            'pekerjaan_ayah' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'asal_sekolah' => 'required|string',
            'status' => 'required|in:baru,pindahan',
            'jenjang' => 'required|in:ma,mts',
        ];
        if ($request->no_identitas != $student->no_identitas) {
            $rules['no_identitas'] = 'required|numeric|unique:students,no_identitas';
        }
        if ($request->email != $student->email) {
            $rules['email'] = 'required|email|unique:students,email';
        }
        if ($request->kontak != $student->kontak) {
            $rules['kontak'] = 'required|numeric|unique:students,kontak';
        }
        if ($request->telphone_ayah != $student->telphone_ayah) {
            $rules['telphone_ayah'] = 'required|numeric|unique:students,telphone_ayah';
        }
        if ($request->telphone_ibu != $student->telphone_ibu) {
            $rules['telphone_ibu'] = 'required|numeric|unique:students,telphone_ibu';
        }
        $validated = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('siswa-images');
        }
        Student::where('id', $student->id)->update($validated);
        return redirect(route('daftar.index'))->with('success', 'Student has been updated!');
    }
}
