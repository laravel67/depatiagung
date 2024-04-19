<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="navbar-brand mr-auto mx-lg-2">PPDB DEPATI AGUNG  {{ date("Y") }}</div>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto mr-lg-4">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ppdb.home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Download Formulir</a>
            </li>
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ppdb.daftar') }}">Pendaftaran</a>
            </li>
            @else
            @can('siswa')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ppdb.profile') }}">Data Pendaftaran</a>
            </li>
            @endcan
            @endguest
            <li class="nav-item">
                <a class="nav-link" href="/">Blog</a>
            </li>
            <li class="nav-item mx-lg-5">
                @auth
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-outline-light mt-1 col-12 border-0">Logout</button>
                </form>
                @else
                <a class="btn btn-outline-light mt-1 col-12 border-0" href="{{ route('login') }}">Login</a>
                @endauth
            </li>
        </ul>
    </div>
</nav>