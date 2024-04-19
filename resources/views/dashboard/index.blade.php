@extends('components.layouts.app')
@section('content')
{{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
    <h3>Selamat Datang <strong>{{ Auth::user()->name }}</strong></h3>
</div> --}}
<div class="row">
    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card border-danger">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-muted mb-0">Pengguna</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $users }} </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape rounded shadow p-3 text-white" style="background-color: red">
                            <i class="fa-solid fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card border-info">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-muted mb-0">Postingan Anda</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $postByUser }} </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape rounded shadow p-3 text-white"
                            style="background-color: rgb(0, 225, 255)">
                            <i class="fa-solid fa-newspaper"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card border-primary">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-muted mb-0">Semua Berita</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $posts }} </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape rounded shadow p-3 text-white"
                            style="background-color: rgb(6, 98, 110)">
                            <i class="fa-solid fa-newspaper"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card border-warning">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-muted mb-0">Kategori Berita</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $category }} </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape rounded shadow p-3 text-white"
                            style="background-color: rgb(160, 166, 0)">
                            <i class="fa-solid fa-tags"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card border-success">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-muted mb-0">Mata Pelajaran</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $mapel }} </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape rounded shadow p-3 text-white"
                            style="background-color: rgb(0, 166, 42)">
                            <i class="fa-solid fa-book"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card border-secondary">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-muted mb-0">Sarana Prasarana</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $sarana }} </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape rounded shadow p-3 text-white"
                            style="background-color: rgb(116, 116, 116)">
                            <i class="fa-solid fa-landmark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card border-secondary">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-muted mb-0">Prestasi/Achievment</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $achievment }} </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape rounded shadow p-3 text-white"
                            style="background-color: rgb(0, 118, 73)">
                            <i class="fa-solid fa-medal"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card border-secondary">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-muted mb-0">Guru</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $guru }} </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape rounded shadow p-3 text-white"
                            style="background-color: rgb(118, 0, 37)">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card border-secondary">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-muted mb-0">PPDB</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $student }} </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape rounded shadow p-3 text-white"
                            style="background-color: rgb(12, 16, 85)">
                            <i class="fa-regular fa-id-card"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection