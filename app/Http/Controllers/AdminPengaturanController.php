<?php

namespace App\Http\Controllers;

use App\Models\Sambutan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPengaturanController extends Controller
{
    public function __construct()
    {
        return view()->share('title', 'Pengaturan Umum');
    }

    public function index()
    {
        $sambutan = Sambutan::first();
        return view('dashboard.pengaturan.index', compact('sambutan'));
    }

    public function sambutan(Request $request)
    {
        // Validate the input data
        $dataValidated = $request->validate([
            'body' => 'required|string',
            'image' => 'nullable|image|max:1024',
        ]);

        // Fetch the existing 'sambutan' record, if it exists
        $sambutan = Sambutan::first();

        if ($request->file('image')) {
            // If a new image is uploaded, delete the old image if it exists
            if ($sambutan && $sambutan->image) {
                Storage::delete($sambutan->image);
            }

            // Store the new image and set its path in the validated data array
            $dataValidated['image'] = $request->file('image')->store('sambutan');
        }

        // Generate an excerpt from the body
        $dataValidated['excerpt'] = Str::limit(strip_tags($dataValidated['body']), 200);

        if ($sambutan) {
            // Update the existing record
            $sambutan->update($dataValidated);
        } else {
            // Create a new record if none exists
            Sambutan::create($dataValidated);
        }
        return redirect()->route('pengaturan')->with('success', 'Kata sambutan berhasil diperbarui!');
    }

}
