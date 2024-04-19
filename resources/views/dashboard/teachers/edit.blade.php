@extends('components.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-7">
        <h6 class="border-bottom"><i class="fa-solid fa-pen"></i> Buat Data Guru</h6>
        <form action="{{ route('guru.update', $guru->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Nama Guru</label>
                <input type="text" class="form-control @error('name')
                    is-invalid
                @enderror" name="name" id="name" value="{{ old('name', $guru->name) }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control @error('slug')
                    is-invalid
                @enderror" name="slug" id="slug" readonly value="{{ old('slug', $guru->slug) }}">
                @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pendidikan">Pendidikan Terahir</label>
                <input type="text" class="form-control @error('pendidikan')
                    is-invalid
                @enderror" name="pendidikan" id="pendidikan" value="{{ old('pendidikan', $guru->pendidikan) }}">
                @error('pendidikan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug">Mulai Mengajar</label>
                <input type="date" class="form-control @error('mulai_mengajar')
                    is-invalid
                @enderror" name="mulai_mengajar" id="mulai_mengajar"
                    value="{{ old('mulai_mengajar', $guru->mulai_mengajar) }}">
                @error('mulai_mengajar')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="mapel_id">Guru Mapel</label>
                <select type="text" class="form-control mapels @error('mapel_id') is-invalid @enderror"
                    name="mapel_id[]" id="mapel_id" multiple="multiple">
                    @foreach ($mapels as $mapel)
                    <option value="{{ $mapel->id }}" {{ in_array($mapel->id, old('mapel_id',
                        $guru->mapels->pluck('id')->toArray())) ?
                        'selected' : '' }}>
                        {{ $mapel->name }}
                    </option>
                    @endforeach
                </select>
                @error('mapel_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug">Deskripsi</label>
                <input id="deskripsi" type="hidden" class="@error('deskripsi')
                    is-invalid
                @enderror" name="deskripsi" value="{{ old('deskripsi', $guru->deskripsi) }}">
                <trix-editor input="deskripsi"></trix-editor>
                @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image/Gambar</label>
                <input type="hidden" name="oldImage" value="{{ $guru->image }}">
                <input type="file" class="form-control @error('name') is-invalid @enderror" name="image" id="image"
                    onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if ($guru->image)
                <img id="previewContainer" src="{{ asset('storage/'.$guru->image) }}" class="mt-3 img-fluid"
                    width="300">
                @else
                <img id="previewContainer" class="mt-3 img-fluid" width="300">
                @endif
            </div>
            <div class="btn btn-group float-right">
                <a href="{{ route('guru.index') }}" class="btn btn-danger" type="reset">Batal</a>
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
@include('dashboard.teachers.script')
@endpush