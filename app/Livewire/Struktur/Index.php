<?php

namespace App\Livewire\Struktur;

use App\Models\Bidang;
use Livewire\Component;
use App\Models\Struktur;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use WithFileUploads;

    public $name = [];
    public $nameOrang = [];
    public $idbidang = [];
    public $image = [];
    public $oldImage = [];

    public function mount()
    {
        $bidang = Bidang::all();
        foreach ($bidang as $index => $row) {
            $this->name[$index] = $row->name;
            $this->idbidang[$index] = $row->id;
            $this->nameOrang[$index] = $row->strukturs->first()?->name ?? '';
            $this->oldImage[$index] = $row->strukturs->first()?->image ?? '';
        }
    }
    public function render()
    {
        $bidang = Bidang::all();
        // $struktur = Struktur::all();
        return view('livewire.struktur.index', compact('bidang'));
    }

    public function store()
    {
        $this->validate([
            'nameOrang.*' => 'required|string|max:255',
            'image.*' => 'nullable|image|max:1024', // Bisa null jika tidak ada gambar
        ]);

        foreach ($this->nameOrang as $index => $name) {
            $struktur = Struktur::where('bidang_id', $this->idbidang[$index])->first();
            $imgName = $struktur->image ?? null;

            if (isset($this->image[$index])) {
                // Hapus gambar lama jika ada
                if ($imgName) {
                    Storage::disk('public')->delete('strukturs/' . $imgName);
                }

                // Simpan gambar baru
                $imgName = 'struktur-' . uniqid() . '.' . $this->image[$index]->getClientOriginalExtension();
                $this->image[$index]->storeAs('strukturs', $imgName, 'public');
            }

            if ($struktur) {
                // Jika entri sudah ada, update data
                $struktur->update([
                    'name' => $name,
                    'image' => $imgName,
                ]);
            } else {
                // Jika tidak ada, buat entri baru
                Struktur::create([
                    'name' => $name,
                    'bidang_id' => $this->idbidang[$index],
                    'image' => $imgName,
                ]);
            }
        }
        Storage::deleteDirectory('livewire-tmp');
        return redirect()->route('admin.struktur')->with('success', 'Struktur berhasil diperbarui!');
    }
}
