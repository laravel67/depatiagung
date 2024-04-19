@extends('components.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-7">
        <h6 class="border-bottom"><i class="fa-solid fa-pen"></i> Buat Pengguna Baru</h6>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control @error('name')
                    is-invalid
                @enderror" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control @error('username')
                    is-invalid
                @enderror" name="username" id="username" value="{{ old('username') }}">
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email')
                    is-invalid
                @enderror" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">Kontak/Telpone</label>
                <input type="text" class="form-control @error('phone')
                    is-invalid
                @enderror" name="phone" id="phone" value="{{ old('phone') }}">
                @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control @error('role') is-invalid @enderror" name="role" id="role">
                    <option value="">==Pilih Role==</option>
                    <option value="admin" {{ old('role')=='admin' ? 'selected' : '' }}>Administrator</option>
                    <option value="admin" {{ old('role')=='admin' ? 'selected' : '' }}>User
                </select>
                @error('role')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="btn btn-group float-right">
                <a href="{{ route('user.index') }}" class="btn btn-danger" type="reset">Batal</a>
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