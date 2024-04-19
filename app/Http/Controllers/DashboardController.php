<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Post;
use App\Models\User;
use App\Models\Mapel;
use App\Models\Sarana;
use App\Models\Student;
use App\Models\Category;
use App\Models\Achievment;
use App\Models\Taj;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     if (!auth()->check() || auth()->user()->role !== 'user') {
    //         abort(403);
    //     }
    // }
    public function index()
    {
        $users = User::where('role', 'admin')
            ->orWhere('role', 'user')
            ->count();
        $userId = auth()->id();
        $postByUser = Post::where('user_id', $userId)->count();
        $posts = Post::count();
        $categoris = Category::count();
        $mapel = Mapel::count();
        $guru = Guru::count();
        $sarana = Sarana::count();
        $achievment = Achievment::count();
        $newestTaId = Taj::latest('id')->first()->id;
        $students = Student::where('ta_id', $newestTaId)->count();

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'users' => $users,
            'postByUser' => $postByUser,
            'posts' => $posts,
            'category' => $categoris,
            'mapel' => $mapel,
            'sarana' => $sarana,
            'guru' => $guru,
            'achievment' => $achievment,
            'student'=>$students
        ]);
    }
}
