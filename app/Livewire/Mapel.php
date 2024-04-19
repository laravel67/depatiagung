<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Mapel as Mapels;
use Livewire\WithPagination;

class Mapel extends Component
{
    use WithPagination;
    public $search = '';

    public $deletId;
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
        $mapels = MapelS::where('name', 'like', '%' . $this->search . '%')->orderBy('id', 'desc')->paginate(10);
        return view('livewire.mapel', compact('mapels'));
    }

    public function deleting($slug)
    {
        $this->deletId = $slug;
        $this->dispatch('show-delete-confirmation');
    }

    public function delete()
    {
        $mapel = Mapels::where('slug', $this->deletId)->first();
        if ($mapel) {
            $mapel->delete();
        }
        return redirect()->route('mapel.index')->with('success', 'Mapel has been deleted!');
    }
}
