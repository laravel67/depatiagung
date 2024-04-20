<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active': '' }}" href="{{ route('dashboard') }}">
                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/profile*') ? 'active': '' }}"
                    href="{{ route('user.profile') }}">
                    <i class="fa-solid fa-user-circle"></i>
                    Profile
                </a>
            </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Kelola Postingan</span>
                <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <li class="nav-item active">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active': '' }}"
                    href="{{ route('apost.index') }}">
                    <i class="fa-solid fa-newspaper"></i>
                    Posts
                </a>
            </li>
            @can('admin')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active': '' }}"
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
                <a class="nav-link {{ Request::is('dashboard/mapels*') ? 'active': '' }}"
                    href="{{ route('mapel.index') }}">
                    <i class="fa-solid fa-book"></i>
                    Mapel
                </a>
            </li>
            @endcan
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/sarana*') ? 'active': '' }}"
                    href="{{ route('asarana.index') }}">
                    <i class="fa-solid fa-briefcase"></i>
                    Sarana Prasarana
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/guru*') ? 'active': '' }}"
                    href="{{ route('guru.index') }}">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    Data Guru
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/achievments*') ? 'active': '' }}"
                    href="{{ route('prestasi.index') }}">
                    <i class="fa-solid fa-trophy"></i>
                    Achievements
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
                <a class="nav-link {{ Request::is('dashboard/pendaftaran*') ? 'active': '' }}"
                    href="{{ route('daftar.index') }}">
                    <i class="fa-solid fa-address-card"></i>
                    Data Pendaftaran
                </a>
            </li>
        </ul>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/pengaturan/pendaftaran*') ? 'active': '' }}"
                    href="{{ route('set.reg') }}">
                    <i class="fa-solid fa-users-gear"></i>
                    Pengaturan Pendaftaran
                </a>
            </li>
        </ul>


        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Admin</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/users*') ? 'active': '' }}"
                    href="{{ route('user.index') }}">
                    <i class="fa-solid fa-users"></i>
                    Data Pengguna
                </a>
            </li>
        </ul>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/pengaturan/umum*') ? 'active': '' }}" href="{{ route('pengaturan') }}">
                    <i class="fa-solid fa-cog"></i>
                    Pengaturan
                </a>
            </li>
        </ul>
        @endcan
    </div>
</nav>