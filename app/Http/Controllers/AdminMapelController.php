<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminMapelController extends Controller
{
    public function __construct()
    {
        return view()->share('title', 'Kelola Mapel');
    }
    public function index()
    {
        return view('dashboard.mapels.index');
    }

    public function create()
    {
        return view('dashboard.mapels.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:mapels,name',
            'slug' => 'required|unique:mapels,slug'
        ]);
        Mapel::create($validated);
        return redirect(route('mapel.index'))->with('success', 'Mapel has been saved!');
    }

    public function edit(Mapel $mapel)
    {
        return view('dashboard.mapels.edit', compact('mapel'));
    }

    public function update(Request $request, Mapel $mapel)
    {
        $rules = [];
        if ($request->name != $mapel->name) {
            $rules['name'] = 'required|unique:mapels,name';
        }
        if ($request->slug != $mapel->slug) {
            $rules['slug'] = 'required|unique:mapels,slug';
        }
        $validated = $request->validate($rules);
        Mapel::where('id', $mapel->id)->update($validated);
        return redirect(route('mapel.index'))->with('success', 'Mapel has been updated');
    }

    public function destroy(Mapel $mapel)
    {
        Mapel::destroy($mapel->id);
        return back()->with('success', 'Mapel has been deleted');
    }
    public function slug(Request $request)
    {
        $slug = SlugService::createSlug(Mapel::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
