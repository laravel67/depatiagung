<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: rgb(0, 0, 0)">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <div class="nav-link text-light d-flex align-items-center">
                    <a wire:navigate href="{{ route('user.profile') }}">
                        <img src="{{ asset('storage/'. Auth::user()->image) }}" width="50px" height="50px" class="rounded-circle">
                    </a>
                    <div class="ml-2">
                        <strong>
                            {{ Auth::user()->name }}
                        </strong>
                        <br>
                        <small>
                            {{ Auth::user()->role }}
                        </small>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a wire:navigate class="nav-link text-light {{ Request::is('dashboard') ? 'active bg-dark text-white': '' }}" href="{{ route('dashboard') }}">
                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>
            </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Kelola Postingan</span>
                <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <li class="nav-item active">
                <a wire:navigate class="nav-link text-light {{ Request::is('dashboard/posts*') ? 'active bg-dark text-white': '' }}"
                    href="{{ route('apost.index') }}">
                    <i class="fa-solid fa-newspaper"></i>
                    Postingan 
                </a>
            </li>
            @can('admin')
            <li class="nav-item">
                <a wire:navigate class="nav-link text-light {{ Request::is('dashboard/categories*') ? 'active bg-dark text-white': '' }}"
                    href="{{ route('category.index') }}">
                    <i class="fa-solid fa-tags"></i>
                    Kategori
                </a>
            </li>
            @endcan
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Kelola Akademik</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            @can('admin')
            <li class="nav-item">
                <a wire:navigate class="nav-link text-light {{ Request::is('dashboard/mapels*') ? 'active bg-dark text-white': '' }}"
                    href="{{ route('mapel.index') }}">
                    <i class="fa-solid fa-book"></i>
                    Mata Pelajaran
                </a>
            </li>
            @endcan
            <li class="nav-item">
                <a wire:navigate class="nav-link text-light {{ Request::is('dashboard/sarana*') ? 'active bg-dark text-white': '' }}"
                    href="{{ route('asarana.index') }}">
                    <i class="fa-solid fa-briefcase"></i>
                    Sarana Prasarana
                </a>
            </li>
            <li class="nav-item">
                <a wire:navigate class="nav-link text-light {{ Request::is('dashboard/guru*') ? 'active bg-dark text-white': '' }}"
                    href="{{ route('guru.index') }}">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    Data Guru
                </a>
            </li>
            <li class="nav-item">
                <a wire:navigate class="nav-link text-light {{ Request::is('dashboard/achievments*') ? 'active bg-dark text-white': '' }}"
                    href="{{ route('prestasi.index') }}">
                    <i class="fa-solid fa-trophy"></i>
                    Prestasi/Penghargaan
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>PPDB</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a wire:navigate class="nav-link text-light {{ Request::is('dashboard/pendaftaran*') ? 'active bg-dark text-white': '' }}"
                    href="{{ route('daftar.index') }}">
                    <i class="fa-solid fa-address-card"></i>
                    Data Pendaftaran
                </a>
            </li>
        </ul>
        @can('admin')
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a wire:navigate class="nav-link text-light {{ Request::is('dashboard/pengaturan/pendaftaran*') ? 'active bg-dark text-white': '' }}"
                    href="{{ route('set.reg') }}">
                    <i class="fa-solid fa-users-gear"></i>
                    Pengaturan Pendaftaran
                </a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Kelola Kesiswaan</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a wire:navigate class="nav-link text-light {{ Request::is('dashboard/kesiswaan*') ? 'active bg-dark text-white': '' }}"
                    href="{{ route('admin.kesiswaan') }}">
                    <i class="fa-solid fa-star"></i>
                    Ekstra Kulikuler
                </a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Admin</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a wire:navigate class="nav-link text-light {{ Request::is('dashboard/users*') ? 'active bg-dark text-white': '' }}"
                    href="{{ route('user.index') }}">
                    <i class="fa-solid fa-users"></i>
                    Data Pengguna
                </a>
            </li>
        </ul>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a wire:navigate class="nav-link text-light {{ Request::is('dashboard/pengaturan/umum*') ? 'active bg-dark text-white': '' }}" href="{{ route('pengaturan') }}">
                    <i class="fa-solid fa-cog"></i>
                    Pengaturan
                </a>
            </li>
        </ul>
        @endcan
    </div>
</nav>