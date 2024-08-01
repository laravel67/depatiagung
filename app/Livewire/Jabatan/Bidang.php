<?php

namespace App\Livewire\Jabatan;

use App\Models\Bidang as Bid;
use Livewire\Component;
use Livewire\WithPagination;

class Bidang extends Component
{
    use WithPagination;
    public $search = '';
    public $idBidang, $name;
    public $isEditing = false;

    protected $listeners = [
        'deleteConfirmed' => 'destroy'
    ];

    protected $rules = [
        'name' => 'required|max:50|unique:bidangs,name'
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
        $bidang = Bid::where('name', 'like', '%' . $this->search . '%')->orderBy('id', 'desc')->paginate(5);
        return view('livewire.jabatan.bidang', compact('bidang'));
    }

    public function store()
    {
        $this->validate();
        Bid::create([
            'name' => $this->name
        ]);
        return redirect()->route('admin.bidang')->with('success', 'Bidang berhasil ditambah!');
    }

    public function edit($id)
    {
        $bidang = Bid::findOrFail($id);
        $this->idBidang = $bidang->id;
        $this->name = $bidang->name;
        $this->isEditing = true;
    }

    public function update()
    {
        $this->validate();
        $bidang = Bid::findOrFail($this->idBidang);
        $bidang->update([
            'name' => $this->name
        ]);
        return redirect()->route('admin.bidang')->with('success', 'Bidang berhasil diperbarui!');
    }

    public function cancel()
    {
        $this->isEditing = false;
        $this->idBidang = null;
        $this->name = '';
    }

    public function deleting($id)
    {
        $this->idBidang = $id;
        $this->dispatch('show-delete-confirmation');
    }

    public function destroy()
    {
        $bidang = Bid::findOrFail($this->idBidang);
        if ($bidang) {
            $bidang->delete();
        }
        return redirect()->route('admin.bidang')->with('success', 'Bidang berhasil dihapus!');
    }
}
