<?php

namespace App\Livewire\Kesiswaan;

use Livewire\Component;
use App\Models\Lifeskill;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Ekstrakulikuler extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $name, $category, $deskripsi, $image, $imageOld;
    public $isEditing = false;

    public $search = '';
    public $idLs;
    protected $listeners = [
        'deleteConfirmed' => 'delete'
    ];

    protected $updateQueryString = [
        'search' => ['except' => '']
    ];
    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $lifesklills = Lifeskill::where('name', 'like', '%' . $this->search . '%')->orderBy('id', 'desc')->paginate(10);
        return view('livewire.kesiswaan.ekstrakulikuler', compact('lifesklills'));
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|unique:lifeskills,name',
            'category' => 'required',
            'deskripsi' => 'nullable|string',
            'image' => 'max:1024|image|file|nullable|mimes:png,jpg,jpeg,svg'
        ]);

        $lifeskill = new Lifeskill();
        $lifeskill->name = $this->name;
        $lifeskill->category = $this->category;
        $lifeskill->deskripsi = $this->deskripsi;
        if ($this->image) {
            $name = Str::random(10) . '.' . $this->image->getClientOriginalExtension();
            $imagePath = $this->image->storeAs('lifeskills', $name);
            $lifeskill->image = $imagePath;
        }
        $lifeskill->save();
        $this->resetForm();
        Storage::deleteDirectory('livewire-tmp');
        return redirect()->route('admin.kesiswaan')->with('success', 'Ekstra Kulikuler has been saved!');
    }

    public function edit($id)
    {
        $lifeskill = Lifeskill::findOrFail($id);
        $this->idLs = $lifeskill->id;
        $this->name = $lifeskill->name;
        $this->category = $lifeskill->category;
        $this->deskripsi = $lifeskill->deskripsi;
        $this->imageOld = asset('storage/' . $lifeskill->image);
        $this->isEditing = true;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|unique:lifeskills,name,' . $this->idLs,
            'category' => 'required',
            'deskripsi' => 'nullable|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:1024',
        ]);

        $lifeskill = Lifeskill::findOrFail($this->idLs);
        $lifeskill->name = $this->name;
        $lifeskill->category = $this->category;
        $lifeskill->deskripsi = $this->deskripsi;
        // Mengelola gambar
        if ($this->image) {
            // Simpan gambar baru
            $name = Str::random(10) . '.' . $this->image->getClientOriginalExtension();
            $imagePath = $this->image->storeAs('lifeskills', $name);

            // Hapus gambar lama jika ada
            if ($lifeskill->image) {
                Storage::delete($lifeskill->image);
            }

            $lifeskill->image = $imagePath;
        } 
        $lifeskill->save();
        $this->cancel();
        Storage::deleteDirectory('livewire-tmp');
        return redirect()->route('admin.kesiswaan')->with('success', 'Ekstra Kulikuler has been updated!');
    }

    public function resetForm()
    {
        $this->reset(['name', 'category', 'deskripsi', 'image']);
    }

    public function deleting($id)
    {
        $this->idLs = $id;
        $this->dispatch('show-delete-confirmation');
    }

    public function delete()
    {
        $ls = Lifeskill::where('id', $this->idLs)->first();
        if ($ls) {
            Storage::delete($ls->image);
            $ls->delete();
        }
        return redirect()->route('admin.kesiswaan')->with('success', 'Ekstra Kulikuler has been delete!');
    }
    public function cancel()
    {
        $this->resetForm();
        $this->isEditing = false;
    }
}
