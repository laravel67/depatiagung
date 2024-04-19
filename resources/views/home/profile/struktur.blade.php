@extends('components.frontend.layouts.app')
@section('content')
@include('home.profile.header')
<div class="container-fluid bg-white">
    {{-- Satu --}}
    <div class="card-header mb-2 bg-green"></div>
    <div class="row justify-content-around mb-2" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
        <div class="col-md-6">
            <div class="row justify-content-center">
                <div class="text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <div class="list-group">
                        <button type="button" class="p-0  list-group-item list-group-item-action active">
                            KATUA YAYASAN
                        </button>
                        <button type="button" class="p-0 px-1 list-group-item list-group-item-action">KASPUL ULIL
                            AMRI</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Dua --}}
    <div class="row justify-content-around" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
        <div class="col-md-6">
            <div class="row justify-content-center">
                <div class="text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <div class="list-group">
                        <button type="button" class="p-0  list-group-item list-group-item-action active">
                            KEPALA MADRASAH
                        </button>
                        <button type="button" class="p-0 px-1 list-group-item list-group-item-action">
                            KHAIRUMAN, S.Pd
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Tiga --}}
    <div class="card-header border-none p-0 bg-white text-center mt-5">
        <strong class="bg-dark text-light p-2">UNIT</strong>
    </div>
    <div class="row justify-content-around mb-2" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
        <div class="col-6">
            <div class="row justify-content-center">
                <div class="text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <div class="list-group">
                        <button type="button" class="p-0  list-group-item list-group-item-action bg-warning text-white">
                            PERPUSTAKAAN
                        </button>
                        <button type="button" class="p-0 px-1 list-group-item list-group-item-action">
                            FAHRI MAIDION, S.Ip
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row justify-content-center">
                <div class="text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <div class="list-group">
                        <button type="button" class="p-0  list-group-item list-group-item-action bg-warning text-white">
                            TATA USAHA
                        </button>
                        <button type="button" class="p-0 px-1 list-group-item list-group-item-action">
                            VIVI GUSPIKA, S.Pd
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Empat --}}
    <div class="card-header border-none p-0 bg-white text-center mt-5">
        <strong class="bg-dark text-light p-2">UR</strong>
    </div>
    <div class="row justify-content-center mb-2" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
        <div class="col-md-3 col-6 mb-3">
            <div class="row justify-content-center">
                <div class="text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <div class="list-group">
                        <button type="button" class="p-0  list-group-item list-group-item-action bg-success text-light">
                            KURIKULUM
                        </button>
                        <button type="button" class="p-0 px-1 list-group-item list-group-item-action">
                            KHAIRUL FADLI, S.Ag
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="row justify-content-center">
                <div class="text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <div class="list-group">
                        <button type="button" class="p-0  list-group-item list-group-item-action bg-success text-light">
                            KESISWAAN
                        </button>
                        <button type="button" class="p-0 px-1 list-group-item list-group-item-action">
                            BAYU RIZAL A, S.Pd.I
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="row justify-content-center">
                <div class="text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <div class="list-group">
                        <button type="button" class="p-0  list-group-item list-group-item-action bg-success text-light">
                            SARANA-PRASARANA
                        </button>
                        <button type="button" class="p-0 px-1 list-group-item list-group-item-action">
                            RENDY, S.Kom
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="row justify-content-center">
                <div class="text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <div class="list-group">
                        <button type="button" class="p-0  list-group-item list-group-item-action bg-success text-light">
                            HUMAS
                        </button>
                        <button type="button" class="p-0 px-1 list-group-item list-group-item-action">
                            KHAIRUMAN, S.Pd
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Lima --}}
    <div class="card-header border-none p-0 bg-white text-center mt-5">
        <strong class="bg-dark text-light p-2">WALI KELAS</strong>
    </div>
    <div class="row justify-content-center mb-2" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
        <div class="col-md-2 col-5 mb-3">
            <div class="row justify-content-center">
                <div class="text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <div class="list-group">
                        <button type="button" class="p-0  list-group-item list-group-item-action bg-info text-white">
                            WALI KELAS
                        </button>
                        <button type="button" class="p-0 px-1 list-group-item list-group-item-action">
                            KHAIRUMAN, S.Pd
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-5 mb-3">
            <div class="row justify-content-center">
                <div class="text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <div class="list-group">
                        <button type="button" class="p-0  list-group-item list-group-item-action bg-info text-white">
                            WALI KELAS
                        </button>
                        <button type="button" class="p-0 px-1 list-group-item list-group-item-action">
                            KHAIRUMAN, S.Pd
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-5 mb-3">
            <div class="row justify-content-center">
                <div class="text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <div class="list-group">
                        <button type="button" class="p-0  list-group-item list-group-item-action bg-info text-white">
                            WALI KELAS
                        </button>
                        <button type="button" class="p-0 px-1 list-group-item list-group-item-action">
                            KHAIRUMAN, S.Pd
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-5 mb-3">
            <div class="row justify-content-center">
                <div class="text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <div class="list-group">
                        <button type="button" class="p-0  list-group-item list-group-item-action bg-info text-white">
                            WALI KELAS
                        </button>
                        <button type="button" class="p-0 px-1 list-group-item list-group-item-action">
                            KHAIRUMAN, S.Pd
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-5 mb-3">
            <div class="row justify-content-center">
                <div class="text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <div class="list-group">
                        <button type="button" class="p-0  list-group-item list-group-item-action bg-info text-white">
                            WALI KELAS
                        </button>
                        <button type="button" class="p-0 px-1 list-group-item list-group-item-action">
                            KHAIRUMAN, S.Pd
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-5 mb-3">
            <div class="row justify-content-center">
                <div class="text-center">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100"
                        xmlns="http://www.w3.org/2000/svg" role="img">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>
                    <div class="list-group">
                        <button type="button" class="p-0  list-group-item list-group-item-action bg-info text-white">
                            WALI KELAS
                        </button>
                        <button type="button" class="p-0 px-1 list-group-item list-group-item-action">
                            KHAIRUMAN, S.Pd
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Enam --}}
    <div class="card-header border-none p-0 bg-white text-center mt-5">
        <strong class="bg-dark text-light p-2">GURU MAPEL</strong>
    </div>
</div>
@endsection