@extends('components.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-7">
        <h6 class="border-bottom"><i class="fa-solid fa-pen"></i> Ubah Sarana Prasarana</h6>
        <form action="{{ route('asarana.update', $sarana->slug) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Nama SP</label>
                <input type="text" class="form-control @error('name')
                    is-invalid
                @enderror" name="name" id="name" value="{{ old('name', $sarana->name) }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug">Slug SP</label>
                <input type="text" class="form-control @error('slug')
                    is-invalid
                @enderror" name="slug" id="slug" readonly value="{{ old('slug', $sarana->slug) }}">
                @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug">Deskripsi</label>
                <input id="body" type="hidden" class="@error('body')
                    is-invalid
                @enderror" name="body" value="{{ old('body', $sarana->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image/Gambar</label>
                <input type="hidden" name="oldImage" value="{{ $sarana->image }}">
                <input type="file" class="form-control @error('name') is-invalid @enderror" name="image" id="image"
                    onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if ($sarana->image)
                <img id="previewContainer" src="{{ asset('storage/'.$sarana->image) }}" class="mt-3 img-fluid"
                    width="300">
                @else
                <img id="previewContainer" class="mt-3 img-fluid" width="300">
                @endif
            </div>
            <div class="btn btn-group float-right">
                <a href="{{ route('asarana.index') }}" class="btn btn-danger" type="reset">Batal</a>
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
@include('dashboard.saranas.script')
@endpush