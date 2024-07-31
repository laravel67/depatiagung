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
use App\Http\Controllers\AdminKesiswaanController;
use App\Http\Controllers\AdminPengaturanController;
use App\Http\Controllers\AdminSettingController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\Home\AchievmentController;
use App\Http\Controllers\UserProfileController;






Auth::routes();
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/berita', [PostController::class, 'index'])->name('posts');
Route::get('/berita/{slug}', [PostController::class, 'show'])->name('post');
// Profile
Route::get('/profile/identitas', [ProfileController::class, 'identitas'])->name('identitas');
Route::get('/profile/sambutan', [ProfileController::class, 'sambutan'])->name('sambutan');
Route::get('/profile/struktural', [ProfileController::class, 'struktur'])->name('struktur');
Route::get('/profile/sejarah', [ProfileController::class, 'sejarah'])->name('sejarah');
Route::get('/profile/visi-misi', [ProfileController::class, 'visi'])->name('visi');
// Akademik
Route::get('/akademik/kurikulum', [AkademikController::class, 'kurikulum'])->name('kurikulum');
Route::get('/akademik/sarana-prasarana', [AkademikController::class, 'sarana'])->name('sarana');
Route::get('/akademik/biografi', [AkademikController::class, 'biografi'])->name('biografi');
// Achievment
Route::get('/prestasi/akdemik', [AchievmentController::class, 'akademik'])->name('akademik');
Route::get('/prestasi/non-akdemik', [AchievmentController::class, 'nonakademik'])->name('nonakademik');
// Ektra Kulikuler
Route::get('/kesiswaan/ekstrakulikuler', [KesiswaanController::class, 'lifeskill'])->name('lifeskill');
Route::get('/kesiswaan/prestasi-santri', [AchievmentController::class, 'student'])->name('students.prestasi');
// Pendaftaran PPDB
Route::get('/info-pendaftaran', [PpdbController::class, 'home'])->name('ppdb.home');
Route::get('/formulir-pendaftaran', [PpdbController::class, 'daftar'])->name('ppdb.daftar');
Route::get('/downloads', [DownloadController::class, 'download'])->name('downloading');
Route::get('/ppdb/download/brosur/{id}', [DownloadController::class, 'downloadBrosur'])->name('downloadBrosur');
// Route::get('/ppdb/download/form', [DownloadController::class, 'downloadFormulir'])->name('download.formulir');
// Arsip
Route::get('/kesiswaan/album', [KesiswaanController::class, 'album'])->name('album');
// Siswa
Route::group(['middleware' => ['siswa']], function () {
    Route::get('/biodata', [PpdbController::class, 'profileRegister'])->name('ppdb.profile');
    Route::get('/download/formulir/{id}', [DownloadController::class, 'downloadForm'])->name('downloadForm');
});
// User dan admin
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
// Admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/category/slug', [AdminCategoryController::class, 'slug']);
    Route::resource('/dashboard/categories', AdminCategoryController::class)->names('category');
    Route::get('/mapel/slug', [AdminMapelController::class, 'slug']);
    Route::resource('/dashboard/mapels', AdminMapelController::class)->names('mapel');
    Route::resource('/dashboard/users', AdminUserController::class)->names('user');
    Route::get('/dashboard/pengaturan/pendaftaran', [AdminSettingController::class, 'setDaftar'])->name('set.reg');
    Route::get('/dashboard/pengaturan/umum', [AdminPengaturanController::class, 'index'])->name('pengaturan');
    Route::post('/dashboard/pengaturan/sambutan', [AdminPengaturanController::class, 'sambutan'])->name('pengaturan.sambutan');
    Route::get('/dashboard/kesiswaan', [AdminKesiswaanController::class, 'index'])->name('admin.kesiswaan');
});
