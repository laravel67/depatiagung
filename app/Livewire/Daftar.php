<?php

namespace App\Livewire;

use App\Models\Daftar as Daf;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Daftar extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;

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
        $daftars = Student::where('nama', 'like', '%' . $this->search . '%')->orderBy('id', 'desc')->paginate($this->perPage);
        return view('livewire.daftar', [
            'daftars' => $daftars
        ]);
    }

    public function show()
    {
        $this->perPage;
    }

    public function detail($id)
    {
        $daftar = Student::findOrFail($id);
        return redirect()->route('daftar.show', ['daftar' => $daftar]);
    }
}
