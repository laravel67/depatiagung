<?php

namespace App\Livewire\Setting;

use App\Models\Taj;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class Register extends Component
{
    use WithPagination;
    public $name;
    public $ketua_penitia;
    public $editId;
    public $isEditing = false;
    protected $listeners = [
        'deleteConfirmed' => 'delete'
    ];
    public function render()
    {
        $tajs = Taj::orderBy('id', 'desc')->paginate(1);
        return view('livewire.setting.register', compact('tajs'));
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:9|unique:tajs,name',
            'ketua_penitia' => 'required|string|max:255',
        ]);
        Taj::create([
            'name' => $this->name,
            'ketua_penitia' => $this->ketua_penitia,
        ]);
        return redirect()->route('set.reg')->with('success', 'Tahun Ajaran has been saved!');
    }
    public function active($tajId)
    {
        $taj = Taj::findOrFail($tajId);
        $taj->status = 1;
        $taj->save();
        $this->dispatch('activedRegister');
    }
    public function unactive($tajId)
    {
        $taj = Taj::findOrFail($tajId);
        $taj->status = 0;
        $taj->save();
    }
    public function cancel()
    {
        $this->reset('name');
        $this->reset('ketua_penitia');
    }
    public function edit($tajId)
    {
        $taj = Taj::findOrFail($tajId);
        $this->isEditing = true;
        $this->name = $taj->name;
        $this->ketua_penitia = $taj->ketua_penitia;
        $this->editId = $tajId;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:9|unique:tajs,name,' . $this->editId,
            'ketua_penitia' => 'required|string|max:255',
        ]);
        $taj = Taj::findOrFail($this->editId);
        $taj->update([
            'name' => $this->name,
            'ketua_penitia' => $this->ketua_penitia,
        ]);
        $this->isEditing = false;
        $this->reset(['name', 'editId']);
        return redirect()->route('set.reg')->with('success', 'Tahun Ajaran has been updated!');
    }
    public function cancelEdit()
    {
        $this->isEditing = false;
        $this->cancel();
    }
    public function deleting($id)
    {
        $this->editId = $id;
        $this->dispatch('show-delete-confirmation');
    }

    public function delete()
    {
        $category = Taj::where('id', $this->editId)->first();
        if ($category) {
            $category->delete();
        }
        $this->reset(['name', 'editId', 'ketua_penitia']);
        $this->isEditing = false;
        return redirect()->route('set.reg')->with('success', 'Tahun Ajaran has been deleted!');
    }
}
