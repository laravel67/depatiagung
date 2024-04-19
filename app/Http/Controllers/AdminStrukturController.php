<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Struktur;
use Illuminate\Http\Request;

class AdminStrukturController extends Controller
{

    public function __construct()
    {
        return view()->share('title', 'Kelola Struktur Madrasah Aliyah');
    }

    public function index()
    {
        $strukturs = Struktur::orderBy('id', 'desc')->get();
        return view('dashboard.strukturs.index', compact('strukturs'));
    }

    public function create()
    {
        $gurus = Guru::all();
        return view('dashboard.strukturs.create', compact('gurus'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'guru_id' => 'required|unique:strukturs,guru_id',
            'jabatan' => 'required|max:50',
            'bidang' => 'required',
        ]);
        Struktur::create($validated);
        return redirect(route('astruktur.index'))->with('success', 'Data struktur berhasil disimpan !');
    }

    public function show(Struktur $struktur)
    {
        //
    }

    public function edit(Struktur $struktur)
    {
        $gurus = Guru::all();
        return view('dashboard.strukturs.edit', compact('gurus', 'struktur'));
    }

    public function update(Request $request, Struktur $struktur)
    {
        $rules = [
            'jabatan' => 'required|max:50',
            'bidang' => 'required',
        ];
        if ($request->guru_id != $struktur->guru_id) {
            $rules['guru_id'] = 'required|unique:strukturs,guru_id';
        }
        $validated = $request->validate($rules);
        Struktur::where('id', $struktur->id)->update($validated);
        return redirect(route('astruktur.index'))->with('success', 'Data struktur berhasil diubah !');
    }

    public function destroy(Struktur $struktur)
    {
        Struktur::destroy($struktur->id);
        return back()->with('success', 'Data struktur berhasil diubah !');
    }
}
