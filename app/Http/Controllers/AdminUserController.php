<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function __construct()
    {
        return view()->share('title', 'Data Pengguna');
    }

    public function index()
    {
        return view('dashboard.users.index');
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|string',
            'username' => [
                'required',
                'regex:/^\S*(?=\S*\d)(?=\S*[a-zA-Z])\S*$/', // Aturan regex untuk username tanpa spasi dan dengan setidaknya satu angka
                'unique:users,username'
            ],
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|digits:12',
            'role' => 'required',
        ], [
            'name.required' => 'Kolom nama diperlukan.',
            'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',
            'name.string' => 'Nama harus berupa teks.',
            'username.required' => 'Kolom username diperlukan.',
            'username.regex' => 'Username tidak boleh mengandung spasi dan harus memiliki setidaknya satu angka di belakangnya.',
            'username.unique' => 'Username sudah digunakan.',
            'email.required' => 'Kolom email diperlukan.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'phone.required' => 'Kolom telepon diperlukan.',
            'phone.numeric' => 'Telepon harus berupa angka.',
            'phone.digits' => 'Nomor telepon harus terdiri dari 12 digit.',
            'role.required' => 'Kolom peran diperlukan.',
        ]);
        User::create($validated);

        return redirect(route('user.index'))->with('success', 'New user has been saved!');
    }

    public function show(User $user)
    {
        return  view('dashboard.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'role' => 'required|in:admin,user',
        ]);

        $user->role = $request->role;
        $user->save();
        return redirect()->route('user.index')->with('success', 'Role has been updated.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User has been updated');
    }
}