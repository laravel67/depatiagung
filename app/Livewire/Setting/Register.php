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
    public $editId;
    public $isEditing = false;
    public function render()
    {
        $tajs = Taj::orderBy('id', 'desc')->paginate(1);
        return view('livewire.setting.register', compact('tajs'));
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:9|unique:tajs,name',
        ]);
        Taj::create([
            'name' => $this->name,
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
    }
    public function edit($tajId)
    {
        $taj = Taj::findOrFail($tajId);
        $this->isEditing = true;
        $this->name = $taj->name;
        $this->editId = $tajId;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:9|unique:tajs,name',
        ]);
        $taj = Taj::findOrFail($this->editId);
        $taj->update([
            'name' => $this->name,
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
    public function delete($tajId)
    {
        $taj = Taj::findOrFail($tajId);
        $taj->delete();
        $this->isEditing = false;
        $this->reset(['name', 'editId']);
        return redirect()->route('set.reg')->with('success', 'Tahun Ajaran has been deleted!');
    }
}
