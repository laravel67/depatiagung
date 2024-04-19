@extends('components.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-7">
        <h6 class="border-bottom"><i class="fa-solid fa-pen"></i> Ubah Postingan/Artikel</h6>
        <form action="{{ route('apost.update', $post->slug) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control @error('name')
                    is-invalid
                @enderror" name="title" id="title" value="{{ old('title', $post->title) }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug">Slug Judul</label>
                <input type="text" class="form-control @error('slug')
                    is-invalid
                @enderror" name="slug" id="slug" readonly value="{{ old('slug', $post->slug) }}">
                @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id">Kategori</label>
                <select type="text" class="form-control @error('category_id') is-invalid @enderror" name="category_id"
                    id="category_id">
                    <option value="">-- Pilih Kategori --</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id')==$category->id || (isset($post) &&
                        $post->category_id
                        == $category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug">Isi Postingan</label>
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image/Gambar</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                <input type="file" class="form-control @error('name') is-invalid @enderror" name="image" id="image"
                    onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if ($post->image)
                <img id="previewContainer" src="{{ asset('storage/'.$post->image) }}" class="mt-3 img-fluid"
                    width="300">
                @else
                <img id="previewContainer" class="mt-3 img-fluid" width="300">
                @endif
            </div>
            <div class="btn btn-group float-right">
                <a href="{{ route('apost.index') }}" class="btn btn-danger" type="reset">Batal</a>
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
@include('dashboard.posts.script')
@endpush