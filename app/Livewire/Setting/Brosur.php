<?php

namespace App\Livewire\Setting;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Brosur as Bros;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class Brosur extends Component
{
    use WithFileUploads;

    public $images = [];
    public $oldImages;

    public function mount()
    {
        $this->loadImage();
    }

    public function loadImage()
    {
        $latestBrosur = Bros::latest()->first();
        if ($latestBrosur) {
            $this->oldImages = $latestBrosur->images ? json_decode($latestBrosur->images, true) : null;
        } else {
            $this->oldImages = null;
        }
    }

    public function render()
    {
        return view('livewire.setting.brosur');
    }


    public function submit()
    {
        $this->validate([
            'images.*' => 'image|max:2024',
        ]);
        $imagesArray = [];
        foreach ($this->images as $image) {
            $path = $image->store('brosurs');
            $imagesArray[] = $path;
        }
        $imagesJson = json_encode($imagesArray);
        $latestBrosur = Bros::latest()->first();
        if ($latestBrosur) {
            $oldImages = json_decode($latestBrosur->images, true);
            foreach ($oldImages as $oldImage) {
                Storage::delete($oldImage);
            }
        }
        if ($latestBrosur) {
            $latestBrosur->update(['images' => $imagesJson]);
        } else {
            Bros::create(['images' => $imagesJson]);
        }
        $this->reset('images');
        Storage::deleteDirectory('livewire-tmp');
        return redirect()->route('set.reg')->with('success', 'Brosur has been changed!');
    }
}
