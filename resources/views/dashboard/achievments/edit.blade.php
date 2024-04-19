@extends('components.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-7">
        <h6 class="border-bottom"><i class="fa-solid fa-pen"></i> Ubah Data Penghargaan</h6>
        <form action="{{ route('prestasi.update', $achievment->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Nama</label>
                <input type="text" class="form-control @error('title')
                    is-invalid
                @enderror" name="title" id="title" value="{{ old('title', $achievment->title) }}">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control @error('slug')
                    is-invalid
                @enderror" name="slug" id="slug" readonly value="{{ old('slug',$achievment->slug) }}">
                @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="category">Kategori</label>
                <select class="form-control @error('category') is-invalid @enderror" name="category" id="category">
                    <option value="akademik" {{ old('category', $achievment->category) == 'akademik' ? 'selected' : ''
                        }}>Akademik
                    </option>
                    <option value="nonakademik" {{ old('category', $achievment->category) == 'nonakademik' ? 'selected'
                        : '' }}>Non
                        Akademik</option>
                    <option value="student" {{ old('category', $achievment->category) == 'student' ? 'selected' : ''
                        }}>Santri/Siswa
                    </option>
                </select>
                @error('category')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug">Deskripsi</label>
                <input id="body" type="hidden" class="@error('body')
                    is-invalid
                @enderror" name="body" value="{{ old('body', $achievment->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image/Gambar</label>
                <input type="hidden" name="oldImage" id="oldImage">
                <input type="file" class="form-control @error('name') is-invalid @enderror" name="image" id="image"
                    onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if ($achievment->image)
                <img src="{{ asset('storage/'.$achievment->image) }}" class="mt-3 img-fluid" width="300">
                @else
                <img id="previewContainer" class="mt-3 img-fluid" width="300">
                @endif
            </div>
            <div class="btn btn-group float-right">
                <a href="{{ route('prestasi.index') }}" class="btn btn-danger" type="reset">Batal</a>
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>
    <div class="col-md-3 d-none d-md-flex">
        <img src="{{ asset('backend/img/undraw_designer_girl_re_h54c.svg') }}" class="img-fluid">
    </div>
</div>
@endsection
@push('js')
@include('dashboard.achievments.script')
@endpush