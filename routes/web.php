<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\AdminGuruController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\PostController;
use App\Http\Controllers\AdminMapelController;
use App\Http\Controllers\AdminSaranaController;
use App\Http\Controllers\Home\ProfileController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\Home\AkademikController;
use App\Http\Controllers\Home\KesiswaanController;
use App\Http\Controllers\AdminAchievmentController;
use App\Http\Controllers\AdminDaftarController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\AdminSettingController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\Home\AchievmentController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UserProfileController;

Auth::routes();
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/articles', [PostController::class, 'index'])->name('posts');
Route::get('/articles/{slug}', [PostController::class, 'show'])->name('post');
// Profile
Route::get('/profile/identitas', [ProfileController::class, 'identitas'])->name('identitas');
Route::get('/profile/struktural', [ProfileController::class, 'struktur'])->name('struktur');
Route::get('/profile/sejarah', [ProfileController::class, 'sejarah'])->name('sejarah');
Route::get('/profile/visi-misi', [ProfileController::class, 'visi'])->name('visi');
// Akademik
Route::get('/akademik/kurikulum', [AkademikController::class, 'kurikulum'])->name('kurikulum');
Route::get('/akademik/sarana-prasarana', [AkademikController::class, 'sarana'])->name('sarana');
Route::get('/akademik/biografi', [AkademikController::class, 'biografi'])->name('biografi');
// Achievment
Route::get('/achievments/akdemik', [AchievmentController::class, 'akademik'])->name('akademik');
Route::get('/achievments/nonakdemik', [AchievmentController::class, 'nonakademik'])->name('nonakademik');
// Ektra Kuli kuler
Route::get('/kesiswaan/ekstrakulikuler', [KesiswaanController::class, 'lifeskill'])->name('lifeskill');
Route::get('/kesiswaan/students-achievments', [AchievmentController::class, 'student'])->name('students.prestasi');
// Pendaftaran PPDB
Route::get('/ppdb/home', [PpdbController::class, 'home'])->name('ppdb.home');
Route::get('/ppdb/daftar', [PpdbController::class, 'daftar'])->name('ppdb.daftar');
// Route::middleware(['auth', 'role:siswa'])->group(function () {
//     Route::get('/ppdb/pendaftaran/data', [PpdbController::class, 'profileRegister'])->name('ppdb.profile');
// });


Route::group(['middleware' => ['siswa']], function () {
    Route::get('/ppdb/pendaftaran/data', [PpdbController::class, 'profileRegister'])->name('ppdb.profile');
    Route::get('/download/formulir/{id}', [DownloadController::class, 'downloadForm'])->name('downloadForm');
});

Route::group(['middleware' => ['role']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/post/slug', [AdminPostController::class, 'slug']);
    Route::resource('/dashboard/posts', AdminPostController::class)->names('apost');
    Route::get('/sarana/slug', [AdminSaranaController::class, 'slug']);
    Route::resource('/dashboard/sarana', AdminSaranaController::class)->names('asarana');
    Route::get('/mapels/slug', [AdminGuruController::class, 'slug']);
    Route::resource('/dashboard/guru', AdminGuruController::class)->names('guru');
    Route::get('/achievments/slug', [AdminAchievmentController::class, 'slug']);
    Route::resource('/dashboard/achievments', AdminAchievmentController::class)->names('prestasi');
    // Route::resource('/dashboard/data/pendaftaran', AdminDaftarController::class)->names('daftar');
    Route::get('/dashboard/pendaftaran', [AdminStudentController::class, 'index'])->name('daftar.index');
    Route::get('/dashboard/pendaftaran/{student}/show', [AdminStudentController::class, 'show'])->name('daftar.show');
    Route::get('/dashboard/pendaftaran/{student}/edit', [AdminStudentController::class, 'edit'])->name('daftar.edit');
    Route::put('/dashboard/pendaftaran/{student}/update', [AdminStudentController::class, 'update'])->name('daftar.update');
    Route::get('/dashboard/profile', [UserProfileController::class, 'userProfile'])->name('user.profile');
    Route::post('/reset-password', [UserProfileController::class, 'updatepassword'])->name('password.update');
    Route::post('/update/profile', [UserProfileController::class, 'updateprofile'])->name('profile.update');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/category/slug', [AdminCategoryController::class, 'slug']);
    Route::resource('/dashboard/categories', AdminCategoryController::class)->names('category');
    Route::get('/mapel/slug', [AdminMapelController::class, 'slug']);
    Route::resource('/dashboard/mapels', AdminMapelController::class)->names('mapel');
    Route::resource('/dashboard/users', AdminUserController::class)->names('user');
    Route::get('/dashboard/pengaturan/pendaftaran', [AdminSettingController::class, 'setDaftar'])->name('set.reg');
});
// Sarana

// // Guru
// Achievment
// Route::get('/mapel/slug', [AdminMapelController::class, 'slug']);
// Route::get('/dashboard/mapels', [AdminMapelController::class, 'index'])->name('mapel.index');
// Route::post('/mapels/store', [AdminMapelController::class, 'store'])->name('mapel.store');
// Route::put('/mapels/update', [AdminMapelController::class, 'update'])->name('mapel.update');
// Route::delete('/mapels/delete', [AdminMapelController::class, 'destroy'])->name('mapel.delete');
// Route::get('/mapels/search', [AdminMapelController::class, 'search'])->name('mapel.search');
// Route::get('/mapels/pagination', [AdminMapelController::class, 'paginate']);
// // Kelola Profile Pondok
// Route::get('/dashboard/identity', [AdminProfileController::class, 'identity'])->name('identity');
// Route::post('/dashboard/identity', [AdminProfileController::class, 'identityUpdate'])->name('identityUpdate');
// // Struktur 
// Route::resource('/dashboard/strukturs', AdminStrukturController::class)->names('astruktur');
// // Prasarana
