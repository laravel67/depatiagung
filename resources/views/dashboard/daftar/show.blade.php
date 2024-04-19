@extends('components.layouts.app')
@section('content')
<div class="my-3 p-3 bg-white rounded shadow-sm rounded-0">
    <h6 class="border-bottom border-gray pb-2 mb-0"><i class="fa-solid fa-user-tie"></i> Data Lengkap</h6>
    <div class="row justify-content-center mt-2">
        @if ($student->image)
        <img class="img-thumbnail" src="{{ asset('storage/'.$student->image) }}" width="200" height="200">
        @else
        <img class="img-thumbnail" src="{{ asset('frontend/img/user.svg') }}" width="200" height="200">
        @endif
    </div>
    <div class="row">
        <div class="col-md">
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-address-card bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Nomor Identitas</span>
                    </div>
                    <strong class="d-block text-dark">{{ $student->no_identitas }}</strong>
                </div>
            </div>
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-user-tie bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Nama Lengkap</span>
                    </div>
                    <strong class="d-block text-dark">{{ $student->nama }}</strong>
                </div>
            </div>
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-map-location-dot bd-placeholder-img rounded" width="52"
                    height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Tempat Lahir</span>
                    </div>
                    <strong class="d-block text-dark">{{ $student->tempat_lahir }}</strong>
                </div>
            </div>
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-calendar-days bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Tanggal Lahir</span>
                    </div>
                    <strong class="d-block text-dark">{{
                        \Carbon\Carbon::parse($student->tanggal_lahir)->locale('id')->translatedFormat('d F
                        Y')}}</strong>
                </div>
            </div>
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2
                                                @if ($student->jenis_kelamin=='L')
                                                    fa-mars
                                                @else
                                                    fa-venus
                                                @endif
                                                bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Jenis Kelamin</span>
                    </div>
                    <strong class="d-block text-dark">
                        @if ($student->jenis_kelamin=='L')
                        Laki-laki
                        @else
                        Perempuan
                        @endif
                    </strong>
                </div>
            </div>
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-hands-praying bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Agama</span>
                    </div>
                    <strong class="d-block text-dark">{{ $student->agama }}</strong>
                </div>
            </div>
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-globe bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Kewarganegaraan</span>
                    </div>
                    <strong class="d-block text-dark">{{ $student->kewarganegaraan }}</strong>
                </div>
            </div>
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-earth-asia bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Negara</span>
                    </div>
                    <strong class="d-block text-dark">{{ $student->negara }}</strong>
                </div>
            </div>
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-location-dot    bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Alamat Lengkap</span>
                    </div>
                    <strong class="d-block text-dark">
                        {{ $student->alamat }}, {{ $student->kecamatan }}, {{ $student->kabupaten }}, {{
                        $student->provinsi }}, {{ $student->kode_pos }}
                    </strong>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-user-group bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Nama Orang Tua</span>
                    </div>
                    <div class="d-flex">
                        <div class="d-flex mr-3">
                            Ayah : <strong class="d-block text-dark">{{ $student->nama_ayah }}</strong>
                        </div>
                        <div class="d-flex">
                            Ibu : <strong class="d-block text-dark">{{ $student->nama_ibu }}</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-briefcase bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100 text-nowrap">
                        <span class="text-dark">Pekerjaan Orang Tua:</span>
                    </div>
                    <div class="d-flex">
                        <div class="d-flex mr-3">
                            Ayah : <strong class="d-block text-dark">{{ $student->pekerjaan_ayah }}</strong>
                        </div>
                        <div class="d-flex">
                            Ibu : <strong class="d-block text-dark">{{ $student->pekerjaan_ibu }}</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-phone bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100 text-nowrap">
                        <span class="text-dark">Nomor Telpon/Whatsapp Orang Tua:</span>
                    </div>
                    <div class="d-flex">
                        <div class="d-flex mr-3">
                            Ayah : <strong class="d-block text-dark">{{ $student->telphone_ayah }}</strong>
                        </div>
                        <div class="d-flex">
                            Ibu : <strong class="d-block text-dark">{{ $student->telphone_ibu }}</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-school-flag bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Asal Sekolah</span>
                    </div>
                    <strong class="d-block text-dark">{{ $student->asal_sekolah }}</strong>
                </div>
            </div>
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-circle-info bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Status</span>
                    </div>
                    <strong class="d-block text-dark">
                        @if ($student->status =="baru")
                        Siswa/Santri Baru
                        @else
                        Siswa/Santri Pindahan
                        @endif
                    </strong>
                </div>
            </div>
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-landmark bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Jenjang</span>
                    </div>
                    <strong class="d-block text-dark">
                        @if ($student->jenjang =="ma")
                        Madrasah Aliyah
                        @else
                        Madrasah Tsanawiyah
                        @endif
                    </strong>
                </div>
            </div>
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-brands fa-xl mx-2 fa-whatsapp bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Kontak</span>
                    </div>
                    <strong class="d-block text-dark">
                        @if ($student->kontak)
                        {{ $student->kontak }}
                        @else
                        -
                        @endif
                    </strong>
                </div>
            </div>
            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-envelope bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Alamat Email</span>
                    </div>
                    <strong class="d-block text-dark">{{ $student->email }}</strong>
                </div>
            </div>

            <div class="media text-muted pt-3 d-flex align-items-center">
                <i class="fa-solid fa-xl mx-2 fa-calendar bd-placeholder-img rounded" width="52" height="52"></i>
                <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span class="text-gray-dark">Tanggal Penstudentan</span>
                    </div>
                    <strong class="d-block text-dark">{{
                        \Carbon\Carbon::parse($student->created_at)->locale('id')->translatedFormat('d F
                        Y')}}</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection