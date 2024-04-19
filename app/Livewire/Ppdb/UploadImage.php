<?php

namespace App\Livewire\Ppdb;

use App\Models\Student;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadImage extends Component
{
    use WithFileUploads;
    public $image, $imageOld, $nama;

    public function mount()
    {
        $this->loadStudentData();
    }

    public function loadStudentData()
    {
        $user = Auth::user();
        if ($user->role == 'siswa') {
            $student = Student::where('email', $user->email)->first();
            if ($student) {
                $this->nama = $student->nama;
                $this->imageOld = $student->image ? asset('storage/siswa-images/' . $student->image) : null;
            }
        }
    }

    public function render()
    {
        return view('livewire.ppdb.upload-image');
    }

    public function uploadImage()
    {
        sleep(2);
        $validatedData = $this->validate([
            'image' => [
                'required',
                'image',
                // Rule::dimensions()->ratio(4 / 3),
                'max:1024', // 1 MB = 1024 KB
            ],
        ], [
            'image.required' => 'Kolom gambar wajib diisi.',
            'image.image' => 'Kolom yang diunggah harus berupa gambar.',
            'image.dimensions' => 'Gambar harus memiliki 3 4:3.',
            'image.max' => 'Ukuran file gambar tidak boleh lebih dari 1MB.',
        ]);
        $name = $this->nama;
        $nameWithoutSpaces = str_replace(' ', '', $name); // Remove spaces from the name
        $uniqueId = Str::uuid();
        $extension = $validatedData['image']->getClientOriginalExtension();
        $imageName = $nameWithoutSpaces . '-' . $uniqueId . '.' . $extension;
        if ($this->imageOld) {
            Storage::delete('siswa-images/' . basename($this->imageOld));
        }
        $this->image = $validatedData['image']->storeAs('siswa-images', $imageName);
        $this->updateImageColumn($imageName);
        Storage::deleteDirectory('livewire-tmp');
        $this->reset();
        $this->loadStudentData();
        $this->dispatch('uploadedImage');
    }

    protected function updateImageColumn($imageName)
    {
        $user = Auth::user();
        if ($user->role == 'siswa') {
            $student = Student::where('email', $user->email)->first();
            if ($student) {
                $student->update([
                    'image' => $imageName,
                ]);
            }
        }
    }
    public function cancel()
    {
        $this->image = '';
        $this->reset();
        $this->loadStudentData();
    }
}
