@extends('ppdb.layouts.app')
@section('content')
<div class="row justify-content-center align-items-center">
    <div class="col-md">
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module">
        </script>
        <dotlottie-player src="https://lottie.host/7e576060-182c-4a08-8363-30a56d16e071/WZnBfyjU5R.json"
            background="transparent" speed="1" style="width: 500px; height: 500px; overflow: hidden;" loop autoplay>
        </dotlottie-player>
    </div>
    <div class="col-md">
        <form class="form-signin" style="max-width: 430px;" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="text-center">
                <img class="mb-4" src="{{ asset('frontend/img/almnrroh.png') }}" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">MAS AL-MUNAWWAROH</h1>
            </div>
            <div class="form-group">
                <label for="email" class="mb-0">Email</label>
                <input type="text" class="form-control @error('email')
                    is-invalid
                @enderror rounded-0" name="email" id="email" placeholder="example@gmail.com">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-1">
                <label for="password" class="mb-0">Kata sandi</label>
                <input type="password" name="password" id="password" class="form-control rounded-0 @error('password')
                    is-invalid
                @enderror" id="password" placeholder="*********">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="checkbox mb-1">
                <label>
                    <input type="checkbox" id="showPasswordCheckbox"> Tampilkan sandi
                </label>
            </div>
            <button class="btn btn-primary btn-block rounded-0" type="submit">Login <i
                    class="fa-solid fa-right-to-bracket"></i></button>
            <p class="my-3 text-center text-muted">© 2024</p>
        </form>
    </div>
</div>
@endsection
@push('js')
    <script>
        document.getElementById('showPasswordCheckbox').addEventListener('change', function() {
        var passwordInput = document.getElementById('password');
        if (this.checked) {
        passwordInput.type = 'text';
        } else {
        passwordInput.type = 'password';
        }
        });
    </script>
@endpush