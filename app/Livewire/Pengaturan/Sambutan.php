<?php

namespace App\Livewire\Pengaturan;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Sambutan as Sam;
use Illuminate\Support\Facades\Storage;

class Sambutan extends Component
{
    use WithFileUploads;
    public $body, $excerpt, $image, $oldImage;

    public function mount()
    {
        $this->load();
    }
    public function load()
    {
        $sambutan = Sam::latest()->first();
        if ($sambutan) {
            $this->body = $sambutan->body;
            $this->oldImage = $sambutan->image;
        } else {
            $this->body = null;
            $this->oldImage = null;
        }
    }
    public function render()
    {
        return view('livewire.pengaturan.sambutan');
    }

    public function submit()
    {
        $this->validate([
            'body' => 'required|string',
            'image' => 'nullable|file|max:1024'
        ]);

        $excerpt = Str::limit(strip_tags($this->body), 200);

        $sambutan = Sam::latest()->first();
        if ($sambutan) {
            if ($this->image) {
                if ($sambutan->image) {
                    Storage::delete($sambutan->image);
                }
            }
            $sambutan->update([
                'body' => $this->body,
                'excerpt' => $excerpt,
                'image' => $this->image ? $this->image->store('sambutan') : $sambutan->image
            ]);
        } else {
            $imagePath = $this->image ? $this->image->store('sambutan') : null;
            Sam::create([
                'body' => $this->body,
                'excerpt' => $excerpt,
                'image' => $imagePath
            ]);
        }
        Storage::deleteDirectory('livewire-tmp');
        return redirect()->route('pengaturan')->with('success', 'Sambutan telah diperbarui!');
    }

}
