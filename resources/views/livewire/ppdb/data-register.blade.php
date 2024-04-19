<div>
    <main role="main" class="container">
        <div
            class="rounded-0 d-flex align-items-center justify-content-center my-3 text-white-50 bg-purple rounded shadow-sm">
            <h4 class="p-0 m-0 text-light">Biodata Pendaftaran</h4>
        </div>
        {{-- <div class="my-3 p-3 bg-white rounded shadow-sm rounded-0">
            <h6 class="border-bottom border-gray pb-2 mb-0"><i class="fa-solid fa-user-tie"></i> Data Lengkap</h6>
            <div class="row justify-content-center mt-2">
                <img class="img-thumbnail" src="{{ asset('frontend/img/kamad.png') }}" width="200" height="200">
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="media text-muted pt-3 d-flex align-items-center">
                        <i class="fa-solid fa-xl mx-2 fa-address-card bd-placeholder-img rounded" width="52"
                            height="52"></i>
                        <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <span class="text-gray-dark">Nomor Identitas</span>
                            </div>
                            <strong class="d-block text-dark">{{ $student->no_identitas }}</strong>
                        </div>
                    </div>
                    <div class="media text-muted pt-3 d-flex align-items-center">
                        <i class="fa-solid fa-xl mx-2 fa-user-tie bd-placeholder-img rounded" width="52"
                            height="52"></i>
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
                        <i class="fa-solid fa-xl mx-2 fa-calendar-days bd-placeholder-img rounded" width="52"
                            height="52"></i>
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
                        <i class="fa-solid fa-xl mx-2 fa-hands-praying bd-placeholder-img rounded" width="52"
                            height="52"></i>
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
                        <i class="fa-solid fa-xl mx-2 fa-earth-asia bd-placeholder-img rounded" width="52"
                            height="52"></i>
                        <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <span class="text-gray-dark">Negara</span>
                            </div>
                            <strong class="d-block text-dark">{{ $student->negara }}</strong>
                        </div>
                    </div>
                    <div class="media text-muted pt-3 d-flex align-items-center">
                        <i class="fa-solid fa-xl mx-2 fa-location-dot    bd-placeholder-img rounded" width="52"
                            height="52"></i>
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
                        <i class="fa-solid fa-xl mx-2 fa-user-group bd-placeholder-img rounded" width="52"
                            height="52"></i>
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
                        <i class="fa-solid fa-xl mx-2 fa-briefcase bd-placeholder-img rounded" width="52"
                            height="52"></i>
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
                        <i class="fa-solid fa-xl mx-2 fa-school-flag bd-placeholder-img rounded" width="52"
                            height="52"></i>
                        <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <span class="text-gray-dark">Asal Sekolah</span>
                            </div>
                            <strong class="d-block text-dark">{{ $student->asal_sekolah }}</strong>
                        </div>
                    </div>
                    <div class="media text-muted pt-3 d-flex align-items-center">
                        <i class="fa-solid fa-xl mx-2 fa-circle-info bd-placeholder-img rounded" width="52"
                            height="52"></i>
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
                        <i class="fa-solid fa-xl mx-2 fa-landmark bd-placeholder-img rounded" width="52"
                            height="52"></i>
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
                        <i class="fa-brands fa-xl mx-2 fa-whatsapp bd-placeholder-img rounded" width="52"
                            height="52"></i>
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
                        <i class="fa-solid fa-xl mx-2 fa-envelope bd-placeholder-img rounded" width="52"
                            height="52"></i>
                        <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <span class="text-gray-dark">Alamat Email</span>
                            </div>
                            <strong class="d-block text-dark">{{ $student->email }}</strong>
                        </div>
                    </div>

                    <div class="media text-muted pt-3 d-flex align-items-center">
                        <i class="fa-solid fa-xl mx-2 fa-calendar bd-placeholder-img rounded" width="52"
                            height="52"></i>
                        <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <span class="text-gray-dark">Tanggal Pendaftaran</span>
                            </div>
                            <strong class="d-block text-dark">{{
                                \Carbon\Carbon::parse($student->created_at)->locale('id')->translatedFormat('d F
                                Y')}}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="my-3 p-3 bg-white rounded shadow-sm rounded-0">
            <div class="d-flex align-items-center">
                <a href="{{ route('downloadForm', $id) }}" class=" btn btn-danger btn-sm rounded-0">Cetak
                    <i class="fa-solid fa-print"></i></a>
            </div>
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fa-solid fa-circle-check"></i></strong> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @livewire('ppdb.upload-image')
            <form class="row justify-content-start my-3" wire:submit.prevent="update">
                <div class="col-lg-6">
                    <h6 class="card-header p-1 text-uppercase bg-primary text-white mb-2">Biodata</h6>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="no_identitas" class="m-0">No Identitas<strong
                                    class="text-danger">*</strong></label>
                            <input type="number" wire:model="no_identitas" class="form-control rounded-0 form-control-sm @error('no_identitas')
                                                    is-invalid
                                                @enderror" id="no_identitas" value="{{ old('no_identitas') }}">
                            @error('no_identitas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="nama" class="m-0">Nama Lengkap<strong class="text-danger">*</strong></label>
                            <input type="text" wire:model="nama" class="form-control rounded-0 form-control-sm @error('nama')
                                                    is-invalid
                                                @enderror" id="nama" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="tempat_lahir" class="m-0">Tempat Lahir<strong
                                    class="text-danger">*</strong></label>
                            <input type="text" class="form-control rounded-0 form-control-sm @error('tempat_lahir')
                                                    is-invalid
                                                @enderror" id="tempat_lahir" value="{{ old('tempat_lahir') }}"
                                wire:model="tempat_lahir">
                            @error('tempat_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_lahir" class="m-0">Tanggal Lahir<strong
                                    class="text-danger">*</strong></label>
                            <input type="date" wire:model="tanggal_lahir" class="form-control rounded-0 form-control-sm @error('tanggal_lahir')
                                                    is-invalid
                                                @enderror" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                            @error('tanggal_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="jenis_kelamin" class="m-0">Jenis Kelamin<strong
                                    class="text-danger">*</strong></label>
                            <select type="text" class="form-control rounded-0 form-control-sm @error('jenis_kelamin')
                                                    is-invalid
                                                @enderror" id="jenis_kelamin" value="{{ old('jenis_kelamin') }}"
                                wire:model="jenis_kelamin">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="agama" class="m-0">Pilih Agama<strong class="text-danger">*</strong></label>
                            <select type="text" class="form-control rounded-0 form-control-sm @error('agama')
                                                    is-invalid
                                                @enderror" id="agama" value="{{ old('agama') }}" wire:model="agama">
                                <option>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Lainya">Lainya</option>
                            </select>
                            @error('agama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="kewarganegaraan" class="m-0">Kewarganegaraan<strong
                                    class="text-danger">*</strong></label>
                            <select type="text" class="form-control rounded-0 form-control-sm @error('kewarganegaraan')
                                                    is-invalid
                                                @enderror" id="kewarganegaraan" value="{{ old('kewarganegaraan') }}"
                                wire:model="kewarganegaraan">
                                <option>Kewarganegaraan</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                            @error('kewarganegaraan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="negara" class="m-0">Negara<strong class="text-danger">*</strong></label>
                            <input type="text" class="form-control rounded-0 form-control-sm @error('negara')
                                                    is-invalid
                                                @enderror" id="negara" value="{{ old('negara') }}" wire:model="negara">
                            @error('negara')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <input class="form-control rounded-0 form-control-sm @error('provinsi')
                                                    is-invalid
                                                @enderror" id="provinsi" wire:model="provinsi" placeholder="Provinsi">
                            @error('provinsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <input class="form-control rounded-0 form-control-sm @error('kabupaten')
                                                    is-invalid
                                                @enderror" id="kabupaten" wire:model="kabupaten"
                                placeholder="Kabupaten/Kota">
                            @error('kabupaten')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <input class="form-control rounded-0 form-control-sm @error('kecamatan')
                                                    is-invalid
                                                @enderror" id="kecamatan" wire:model="kecamatan"
                                placeholder="Kecamatan">
                            @error('kecamatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <input class="form-control rounded-0 form-control-sm @error('kode_pos')
                                                    is-invalid
                                                @enderror" id="kode_pos" wire:model="kode_pos" placeholder="Kode Pos">
                            @error('kode_pos')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                    </div>
                    <div class="row mb-2">
                        <div class="col-md">
                            <label for="alamat" class="m-0">Alamat Lengkap<strong class="text-danger">*</strong></label>
                            <textarea type="text" class="form-control rounded-0 form-control-sm @error('alamat')
                                                    is-invalid
                                                @enderror" id="alamat" value="{{ old('alamat') }}"
                                wire:model="alamat"></textarea>
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h6 class="card-header p-1 text-uppercase bg-primary text-white mb-2">Data orang tua</h6>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="nama_ayah" class="m-0">Nama Orang Tua<strong
                                    class="text-danger">*</strong></label>
                            <input type="text" wire:model="nama_ayah" class="form-control rounded-0 form-control-sm @error('nama_ayah')
                                                    is-invalid
                                                @enderror" id="nama_ayah" value="{{ old('nama_ayah') }}"
                                placeholder="Ayah">
                            @error('nama_ayah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mt-lg-4">
                            <input type="text" wire:model="nama_ibu" class="form-control rounded-0 form-control-sm @error('nama_ibu')
                                                    is-invalid
                                                @enderror" id="nama_ibu" value="{{ old('nama_ibu') }}"
                                placeholder="Ibu">
                            @error('nama_ibu')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="pekerjaan_ayah" class="m-0">Pekerjaan Orang Tua<strong
                                    class="text-danger">*</strong></label>
                            <input type="text" wire:model="pekerjaan_ayah" class="form-control rounded-0 form-control-sm @error('pekerjaan_ayah')
                                                    is-invalid
                                                @enderror" id="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}"
                                placeholder="Ayah">
                            @error('pekerjaan_ayah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mt-lg-4">
                            <input type="text" wire:model="pekerjaan_ibu" class="form-control rounded-0 form-control-sm @error('pekerjaan_ibu')
                                                    is-invalid
                                                @enderror" id="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}"
                                placeholder="Ibu">
                            @error('pekerjaan_ibu')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="telphone_ayah" class="m-0">Nomor Telpon/Whatsapp <small>(Aktif)</small><strong
                                    class="text-danger">*</strong></label>
                            <input type="text" wire:model="telphone_ayah" class="form-control rounded-0 form-control-sm @error('telphone_ayah')
                                                    is-invalid
                                                @enderror" id="telphone_ayah" value="{{ old('telphone_ayah') }}"
                                placeholder="Ayah">
                            @error('telphone_ayah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mt-lg-4">
                            <input type="text" wire:model="telphone_ibu" class="form-control rounded-0 form-control-sm @error('telphone_ibu')
                                                    is-invalid
                                                @enderror" id="telphone_ibu" value="{{ old('telphone_ibu') }}"
                                placeholder="Ibu">
                            @error('telphone_ibu')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <h6 class="card-header p-1 text-uppercase bg-primary text-white mb-2">Asal Sekolah</h6>
                    <div class="row mb-2">
                        <div class="col-md">
                            <input type="text" wire:model="asal_sekolah" class="form-control rounded-0 form-control-sm @error('asal_sekolah')
                                                    is-invalid
                                                @enderror" id="asal_sekolah" value="{{ old('asal_sekolah') }}"
                                placeholder="Nama Sekolah">
                            @error('asal_sekolah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <h6 class="card-header p-1 text-uppercase bg-primary text-white mb-2">Status Calon Siswa</h6>
                    <div class="row mb-2">
                        <div class="col-md">
                            <select type="text" wire:model="status" class="form-control rounded-0 form-control-sm @error('status')
                                                    is-invalid
                                                @enderror" id="status" value="{{ old('status') }}">
                                <option value="">-Status-</option>
                                <option value="baru">Siswa Baru</option>
                                <option value="pindahan">Siswa Pindahan</option>
                            </select>
                            @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md">
                            <select type="text" wire:model="jenjang" class="form-control rounded-0 form-control-sm @error('jenjang')
                                                    is-invalid
                                                @enderror" id="jenjang" value="{{ old('jenjang') }}">
                                <option value="">-Jenjang-</option>
                                <option value="mts">Madrasah Tsanawiyah</option>
                                <option value="ma">Madrasah Aliyah</option>
                            </select>
                            @error('jenjang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <h6 class="card-header p-1 text-uppercase bg-primary text-white mb-2">Kontak</h6>
                    <div class="row mb-md-2">
                        <div class="col-md">
                            <input type="number" wire:model="kontak" class="form-control rounded-0 form-control-sm @error('kontak')
                                                    is-invalid
                                                @enderror" id="kontak" value="{{ old('kontak') }}"
                                placeholder="Kontak">
                            @error('kontak')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-md-2">
                        <div class="col-md">
                            <input type="email" wire:model="email" class="form-control rounded-0 form-control-sm @error('email')
                                                    is-invalid
                                                @enderror" id="email" value="{{ old('email') }}"
                                placeholder="Alamat email">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="btn-group col-12 px-0">
                        <button wire:loading.class="btn btn-success rounded-0" class="btn btn-success rounded-0">
                            <span wire:loading.delay.longest>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Memperbarui...
                            </span>
                            <span wire:loading.remove>
                                Simpan Perubahan
                            </span>
                        </button>
                        <button wire:click='cancel' class="btn btn-danger rounded-0 col-2">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</div>