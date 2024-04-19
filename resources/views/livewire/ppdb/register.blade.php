<div class="my-3 p-3 bg-white rounded shadow-sm my-5">
    @if ($this->checkActive())
    <h3 class="border-bottom border-gray pb-2 mb-0 text-center">
        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Formulir Pendafataran</font>
        </font>
    </h3>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><i class="fa-solid fa-circle-check"></i> Selamat!</strong> {{ session('success') }} <a
            href="{{ route('login') }}" class="alert-link">Login</a>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <form class="row justify-content-start my-3" wire:submit.prevent="submit">
        <div class="col-lg-6">
            <h6 class="card-header p-1 text-uppercase bg-primary text-white mb-2">Biodata</h6>
            <div class="row mb-2">
                <div class="col-md-6">
                    <label for="no_identitas" class="m-0">No Identitas<strong class="text-danger">*</strong></label>
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
                    <label for="tempat_lahir" class="m-0">Tempat Lahir<strong class="text-danger">*</strong></label>
                    <input type="text" class="form-control rounded-0 form-control-sm @error('tempat_lahir')
                            is-invalid
                        @enderror" id="tempat_lahir" value="{{ old('tempat_lahir') }}" wire:model="tempat_lahir">
                    @error('tempat_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="tanggal_lahir" class="m-0">Tanggal Lahir<strong class="text-danger">*</strong></label>
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
                    <label for="jenis_kelamin" class="m-0">Jenis Kelamin<strong class="text-danger">*</strong></label>
                    <select type="text" class="form-control rounded-0 form-control-sm @error('jenis_kelamin')
                            is-invalid
                        @enderror" id="jenis_kelamin" value="{{ old('jenis_kelamin') }}" wire:model="jenis_kelamin">
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
                        @enderror" id="kabupaten" wire:model="kabupaten" placeholder="Kabupaten/Kota">
                    @error('kabupaten')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-2">
                    <input class="form-control rounded-0 form-control-sm @error('kecamatan')
                            is-invalid
                        @enderror" id="kecamatan" wire:model="kecamatan" placeholder="Kecamatan">
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
                        @enderror" id="alamat" value="{{ old('alamat') }}" wire:model="alamat"></textarea>
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
                    <label for="nama_ayah" class="m-0">Nama Orang Tua<strong class="text-danger">*</strong></label>
                    <input type="text" wire:model="nama_ayah" class="form-control rounded-0 form-control-sm @error('nama_ayah')
                            is-invalid
                        @enderror" id="nama_ayah" value="{{ old('nama_ayah') }}" placeholder="Ayah">
                    @error('nama_ayah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 mt-lg-4">
                    <input type="text" wire:model="nama_ibu" class="form-control rounded-0 form-control-sm @error('nama_ibu')
                            is-invalid
                        @enderror" id="nama_ibu" value="{{ old('nama_ibu') }}" placeholder="Ibu">
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
                        @enderror" id="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}" placeholder="Ayah">
                    @error('pekerjaan_ayah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 mt-lg-4">
                    <input type="text" wire:model="pekerjaan_ibu" class="form-control rounded-0 form-control-sm @error('pekerjaan_ibu')
                            is-invalid
                        @enderror" id="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}" placeholder="Ibu">
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
                        @enderror" id="telphone_ayah" value="{{ old('telphone_ayah') }}" placeholder="Ayah">
                    @error('telphone_ayah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 mt-lg-4">
                    <input type="text" wire:model="telphone_ibu" class="form-control rounded-0 form-control-sm @error('telphone_ibu')
                            is-invalid
                        @enderror" id="telphone_ibu" value="{{ old('telphone_ibu') }}" placeholder="Ibu">
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
                        @enderror" id="asal_sekolah" value="{{ old('asal_sekolah') }}" placeholder="Nama Sekolah">
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
                        @enderror" id="kontak" value="{{ old('kontak') }}" placeholder="Kontak">
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
                        @enderror" id="email" value="{{ old('email') }}" placeholder="Alamat email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <button wire:loading.class="btn btn-success rounded-0 col-12" class="btn btn-success rounded-0 col-12">
                <span wire:loading.delay.longest>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Mohon menunggu...
                </span>
                <span wire:loading.remove>
                    Daftar Sekarang
                </span>
            </button>
        </div>
    </form>
    @else
    Pendafataran belum dibuka
    @endif
</div>