<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('favicon-16x16.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon-32x32.png') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/offcanvas.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>PPDB DEPATI AGUNG</title>
</head>

<body class="bg-gray">
    @include('ppdb.layouts.topbar')
    <main role="main" class="container-md my-5" >
        <div class="py-5">
            @yield('content')
        </div>
    </main>
    <div class="bottom-0">
        @include('components.frontend.partials.footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> --}}
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/offcanvas.js') }}"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script>
        $(document).ready(function() {
        // Menampilkan dropdown saat mouse masuk
        $('.nav-item.dropdown').hover(function() {
        $(this).find('.dropdown-menu').addClass('show');
        }, function() {
        // Menyembunyikan dropdown saat mouse meninggalkan
        $(this).find('.dropdown-menu').removeClass('show');
        });
        });
    </script>
    @stack('js')
</body>

</html>