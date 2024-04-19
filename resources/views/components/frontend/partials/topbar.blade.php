<header id="mainHead" class="navbar navbar-expand-lg navbar-dark bg-green" style="background-color: #25bb00;">
    <div class="container">
        <div class="d-flex align-items-end">
            <div class="text-center mr-3">
                <img src="{{ asset('logo_depati_aguung.png') }}" alt="" class="img-fluid" width="150">
            </div>
            <div class="header-text">
                <h4 class="text-light d-md-block d-none"> Yayasan Pondok Pesantren Salafiyah</h4>
                <h4 class="text-light d-md-block d-none">DEPATI AGUNG</h4>
                <a style="text-decoration: underline" href="https://maps.app.goo.gl/UhmFQ9JcG2ft8JCq8" class="text-light"><small>Desa Pulau Raman, Muara Siau, Merangin Regency, Jambi 37371, Indonesia.</small> </a>
            </div>
        </div>
    </div>
</header>
<nav id="mainNav" class="navbar navbar-expand-lg navbar-dark bg-green">
    <div class="container-lg">
        <a class="navbar-brand d-md-none" href="#">YPPS DEPATI AGUNG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item mx-lg-3 {{ Request::is('/*') ? 'active':'' }}">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li
                    class="nav-item dropdown mx-lg-3 {{ Request::is('profile/identitas*', 'profile/struktural*','profile/sejarah*', 'profile/visi-misi*') ? 'active':'' }}">
                    <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Profile</a>
                    <div class="dropdown-menu bg-green">
                        <a class="dropdown-item text-light {{ Request::is('profile/identitas') ? 'bg-dark': '' }}"
                            href="{{ route('identitas') }}">Identitas
                        </a>
                        <a class="dropdown-item text-light {{ Request::is('profile/struktural') ? 'bg-dark': '' }}"
                            href="{{ route('struktur') }}">
                            Struktur Organisasi
                        </a>
                        <a class="dropdown-item text-light {{ Request::is('profile/sejarah') ? 'bg-dark': '' }}"
                            href="{{ route('sejarah') }}">Sejarah
                        </a>
                        <a class="dropdown-item text-light {{ Request::is('profile/visi-misi') ? 'bg-dark': '' }}"
                            href="{{ route('visi') }}">Visi & Misi
                        </a>
                    </div>
                </li>
                <li class="nav-item mx-lg-3 {{ Request::is('articles*') ? 'active':'' }}">
                    <a class="nav-link" href="{{ route('posts') }}">Berita</a>
                </li>
                <li
                    class="nav-item dropdown mx-lg-3 {{ Request::is('akademik/kurikulum*', 'akademik/sarana-prasarana*','akademik/biografi*') ? 'active':'' }}">
                    <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Akademik</a>
                    <div class="dropdown-menu bg-green">
                        <a class="dropdown-item text-light {{ Request::is('akademik/kurikulum*') ? 'bg-dark': '' }}"
                            href="{{ route('kurikulum') }}">Kurikulum
                        </a>
                        <a class="dropdown-item text-light {{ Request::is('akademik/sarana-prasarana*') ? 'bg-dark': '' }}"
                            href="{{ route('sarana') }}">
                            Sarana Prasarana
                        </a>
                        <a class="dropdown-item text-light {{ Request::is('akademik/biografi') ? 'bg-dark': '' }}"
                            href="{{ route('biografi') }}">Biografi Guru
                        </a>
                    </div>
                </li>
                <li
                    class="nav-item dropdown mx-lg-3 {{ Request::is('achievments/akdemik*', 'achievments/nonakdemik*') ? 'active':'' }}">
                    <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Achievment</a>
                    <div class="dropdown-menu bg-green">
                        <a class="dropdown-item text-light {{ Request::is('achievments/akdemik') ? 'bg-dark': '' }}"
                            href="{{ route('akademik') }}">Akademik
                        </a>
                        <a class="dropdown-item text-light {{ Request::is('achievments/nonakdemik') ? 'bg-dark': '' }}"
                            href="{{ route('nonakademik') }}">
                            Non Akademik
                        </a>
                    </div>
                </li>
                <li
                    class="nav-item dropdown mx-lg-3 {{ Request::is('kesiswaan/ekstrakulikuler*', 'kesiswaan/students-achievments*') ? 'active':'' }}">
                    <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Kesiswaan</a>
                    <div class="dropdown-menu bg-green">
                        <a class="dropdown-item text-light {{ Request::is('kesiswaan/ekstrakulikuler*') ? 'bg-dark': '' }}"
                            href="{{ route('lifeskill') }}">
                            Ekstra Kulikuler
                        </a>
                        <a class="dropdown-item text-light {{ Request::is('profile/structures') ? 'bg-dark': '' }}" href="">
                            Organinasasi Santri
                        </a>
                        <a class="dropdown-item text-light {{ Request::is('kesiswaan/students-achievments') ? 'bg-dark': '' }}"
                            href="{{ route('students.prestasi') }}">
                            Prestasi Santri
                        </a>
                    </div>
                </li>
                <li class="nav-item mx-lg-3">
                    <a class="nav-link" href="{{ route('ppdb.home') }}">PPDB</a>
                </li>
                @can('admin')
                    <li class="nav-item mx-lg-3">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                @endcan
                @can('user')
                    <li class="nav-item mx-lg-3">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                @endcan
                @can('siswa')
                    <li class="nav-item mx-lg-3">
                        <a class="nav-link" href="{{ route('ppdb.profile') }}">Data Pendaftaran</a>
                    </li>
                @endcan
            </ul>
        </div>
    </div>
</nav>
<script>
    window.addEventListener('scroll', function() {
        var head = document.getElementById('mainHead');
        var nav = document.getElementById('mainNav');
        
        var headBounding = head.getBoundingClientRect();
        if (headBounding.bottom <= 0) {
            nav.classList.add('fixed-top');
        } else {
            nav.classList.remove('fixed-top');
        }
    });
</script>