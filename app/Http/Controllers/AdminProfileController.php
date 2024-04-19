<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function identity()
    {
        $identity = Identity::first();
        return view('dashboard.profiles.identity', [
            'title' => 'Identitas',
            'identity' => $identity
        ]);
    }

    public function identityUpdate(Request $request)
    {
        $validated = $request->validate([
            'sejarah' => 'required',
            // 'lambang' => 'required',
            // 'hymne' => 'required',
        ]);

        $validated['user_id'] = 1;
        return redirect(route('identity'))->with('success', 'Identitas berhasil diubah');
    }
}
