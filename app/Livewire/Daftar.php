<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Daftar as Daf;
use Illuminate\Support\Facades\Storage;

class Daftar extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;
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

    public function deleting($id)
    {
        $this->deletId = $id;
        $this->dispatch('show-delete-confirmation');
    }

    public function delete()
    {
        $student = Student::where('id', $this->deletId)->first();
        if ($student) {
            if ($student->image) {
                Storage::delete($student->image);
            }
            $student->delete();
        }
        return redirect()->route('daftar.index')->with('success', 'Student has been deleted!');
    }
}
