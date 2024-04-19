@extends('components.layouts.app')
@section('content')
<form action="{{ route('daftar.update', $student->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="my-3 p-3 bg-white rounded shadow-sm rounded-0">
        <h6 class="border-bottom border-gray pb-2 mb-0"><i class="fa-solid fa-user-tie"></i> Ubah Data</h6>
        <div class="row justify-content-center mt-2">
            @if ($student->image)
            <img class="img-thumbnail" src="{{ asset('storage/'.$student->image) }}" width="200" height="200">
            @else
            <img id="previewContainer" class="img-thumbnail" src="{{ asset('frontend/img/user.svg') }}" width="200"
                height="200">
            @endif
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
                        <input type="number" name="no_identitas"
                            value="{{ old('no_identitas',$student->no_identitas) }}" class="form-control-sm form-control @error('no_identitas')
                            is-invalid
                        @enderror">
                        @error('no_identitas')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="media text-muted pt-3 d-flex align-items-center">
                    <i class="fa-solid fa-xl mx-2 fa-user-tie bd-placeholder-img rounded" width="52" height="52"></i>
                    <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span class="text-gray-dark">Nama Lengkap</span>
                        </div>
                        <input type="text" name="nama" value="{{ old('nama',$student->nama) }}" class="form-control-sm form-control @error('nama')
                            is-invalid
                        @enderror">
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="media text-muted pt-3 d-flex align-items-center">
                    <i class="fa-solid fa-xl mx-2 fa-map-location-dot bd-placeholder-img rounded" width="52"
                        height="52"></i>
                    <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span class="text-gray-dark">Tempat Lahir</span>
                        </div>
                        <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir',$student->tempat_lahir) }}"
                            class="form-control-sm form-control @error('tempat_lahir')
                            is-invalid
                        @enderror">
                        @error('tempat_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="media text-muted pt-3 d-flex align-items-center">
                    <i class="fa-solid fa-xl mx-2 fa-calendar-days bd-placeholder-img rounded" width="52"
                        height="52"></i>
                    <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span class="text-gray-dark">Tanggal Lahir</span>
                        </div>
                        <input type="date" name="tanggal_lahir"
                            value="{{ old('tanggal_lahir',$student->tanggal_lahir) }}" class="form-control-sm form-control @error('tanggal_lahir')
                            is-invalid
                        @enderror">
                        @error('tanggal_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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
                        <select name="jenis_kelamin"
                            class="form-control-sm form-control @error('jenis_kelamin') is-invalid @enderror">
                            <option value="L" @if(old('jenis_kelamin',$student->jenis_kelamin)=='L') selected
                                @endif>Laki-laki</option>
                            <option value="P" @if(old('jenis_kelamin',$student->jenis_kelamin)=='P') selected
                                @endif>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="media text-muted pt-3 d-flex align-items-center">
                    <i class="fa-solid fa-xl mx-2 fa-hands-praying bd-placeholder-img rounded" width="52"
                        height="52"></i>
                    <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span class="text-gray-dark">Agama</span>
                        </div>
                        <select name="agama" class="form-control-sm form-control @error('agama') is-invalid @enderror">
                            <option value="Islam" @if(old('agama',$student->agama)=='Islam') selected @endif>Islam
                            </option>
                            <option value="Katolik" @if(old('agama',$student->agama)=='Katolik') selected @endif>Katolik
                            </option>
                            <option value="Protestan" @if(old('agama',$student->agama)=='Protestan') selected
                                @endif>Protestan</option>
                            <option value="Hindu" @if(old('agama',$student->agama)=='Hindu') selected @endif>Hindu
                            </option>
                            <option value="Budha" @if(old('agama',$student->agama)=='Budha') selected @endif>Budha
                            </option>
                            <option value="Lainya" @if(old('agama',$student->agama)=='Lainya') selected @endif>Lainya
                            </option>
                        </select>
                        @error('agama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="media text-muted pt-3 d-flex align-items-center">
                    <i class="fa-solid fa-xl mx-2 fa-globe bd-placeholder-img rounded" width="52" height="52"></i>
                    <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span class="text-gray-dark">Kewarganegaraan</span>
                        </div>
                        <select name="kewarganegaraan"
                            class="form-control-sm form-control @error('kewarganegaraan') is-invalid @enderror">
                            <option value="WNI" @if(old('kewarganegaraan',$student->kewarganegaraan)=='WNI') selected
                                @endif>WNI</option>
                            <option value="WNA" @if(old('kewarganegaraan',$student->kewarganegaraan)=='WNA') selected
                                @endif>WNA</option>
                            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                        </select>
                        @error('kewarganegaraan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="media text-muted pt-3 d-flex align-items-center">
                    <i class="fa-solid fa-xl mx-2 fa-earth-asia bd-placeholder-img rounded" width="52" height="52"></i>
                    <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span class="text-gray-dark">Negara</span>
                        </div>
                        <input type="text" name="negara" value="{{ old('negara',$student->negara) }}" class="form-control-sm form-control @error('negara')
                            is-invalid
                        @enderror">
                        @error('negara')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="media text-muted pt-3 d-flex align-items-center">
                    <i class="fa-solid fa-xl mx-2 fa-location-dot    bd-placeholder-img rounded" width="52"
                        height="52"></i>
                    <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span class="text-gray-dark">Kec/Kab/Prov/Kode Pos</span>
                        </div>
                        <div class="d-flex justify-content-around">
                            <div>
                                <input type="text" name="kecamatan" value="{{ old('kecamatan',$student->kecamatan) }}"
                                    class="form-control-sm form-control @error('kecamatan')
                            is-invalid
                            @enderror">
                                @error('kecamatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <input type="text" name="kabupaten" value="{{ old('kabupaten',$student->kabupaten) }}"
                                    class="form-control-sm form-control @error('kabupaten')
                            is-invalid
                            @enderror">
                                @error('kabupaten')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <input type="text" name="provinsi" value="{{ old('provinsi',$student->provinsi) }}"
                                    class="form-control-sm form-control @error('provinsi')
                            is-invalid
                            @enderror">
                                @error('provinsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <input type="text" name="kode_pos" value="{{ old('kode_pos',$student->kode_pos) }}"
                                    class="form-control-sm form-control @error('kode_pos')
                            is-invalid
                            @enderror">
                                @error('kode_pos')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media text-muted pt-3 d-flex align-items-center">
                    <i class="fa-solid fa-xl mx-2 fa-location-dot    bd-placeholder-img rounded" width="52"
                        height="52"></i>
                    <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span class="text-gray-dark">Alamat</span>
                        </div>
                        <input type="text" name="alamat" value="{{ old('alamat',$student->alamat) }}" class="form-control-sm form-control @error('alamat')
                            is-invalid
                            @enderror">
                        @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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
                            <div class="d-flex mr-3 align-items-center">
                                Ayah<input type="text" name="nama_ayah"
                                    value="{{ old('nama_ayah',$student->nama_ayah) }}" class="form-control-sm form-control @error('nama_ayah')
                            is-invalid
                            @enderror">
                                @error('nama_ayah')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex align-items-center">
                                Ibu<input type="text" name="nama_ibu" value="{{ old('nama_ibu',$student->nama_ibu) }}"
                                    class="form-control-sm form-control @error('nama_ibu')
                            is-invalid
                            @enderror">
                                @error('nama_ibu')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
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
                            <div class="d-flex mr-3 align-items-center">
                                Ayah<input type="text" name="pekerjaan_ayah"
                                    value="{{ old('pekerjaan_ayah',$student->pekerjaan_ayah) }}" class="form-control-sm form-control @error('pekerjaan_ayah')
                            is-invalid
                            @enderror">
                                @error('pekerjaan_ayah')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex align-items-center">
                                Ibu<input type="text" name="pekerjaan_ibu"
                                    value="{{ old('pekerjaan_ibu',$student->pekerjaan_ibu) }}" class="form-control-sm form-control @error('pekerjaan_ibu')
                            is-invalid
                            @enderror">
                                @error('pekerjaan_ibu')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
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
                            <div class="d-flex mr-3 align-items-center">
                                Ayah<input type="number" name="telphone_ayah"
                                    value="{{ old('telphone_ayah',$student->telphone_ayah) }}" class="form-control-sm form-control @error('telphone_ayah')
                            is-invalid
                            @enderror">
                                @error('telphone_ayah')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex align-items-center">
                                Ibu<input type="number" name="telphone_ibu"
                                    value="{{ old('telphone_ibu',$student->telphone_ibu) }}" class="form-control-sm form-control @error('telphone_ibu')
                            is-invalid
                            @enderror">
                                @error('telphone_ibu')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
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
                        <input type="text" name="asal_sekolah" value="{{ old('asal_sekolah',$student->asal_sekolah) }}"
                            class="form-control-sm form-control @error('asal_sekolah')
                            is-invalid
                            @enderror">
                        @error('asal_sekolah')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="media text-muted pt-3 d-flex align-items-center">
                    <i class="fa-solid fa-xl mx-2 fa-circle-info bd-placeholder-img rounded" width="52" height="52"></i>
                    <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span class="text-gray-dark">Status</span>
                        </div>
                        <select name="status"
                            class="form-control-sm form-control @error('status') is-invalid @enderror">
                            <option value="baru" @if(old('status',$student->status)=='baru') selected
                                @endif>Siswa/Santri
                                Baru</option>
                            <option value="pindahan" @if(old('status',$student->status)=='pindahan') selected
                                @endif>Siswa/Santri
                                Pindahan</option>
                        </select>
                        @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="media text-muted pt-3 d-flex align-items-center">
                    <i class="fa-solid fa-xl mx-2 fa-landmark bd-placeholder-img rounded" width="52" height="52"></i>
                    <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span class="text-gray-dark">Jenjang</span>
                        </div>
                        <select name="jenjang"
                            class="form-control-sm form-control @error('jenjang') is-invalid @enderror">
                            <option value="ma" @if(old('jenjang',$student->jenjang)=='ma') selected @endif>Madrasah
                                Aliyah
                            </option>
                            <option value="mts" @if(old('jenjang',$student->jenjang)=='mts') selected @endif>Madrasah
                                Tsanawiyah
                            </option>
                        </select>
                        @error('jenjang')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="media text-muted pt-3 d-flex align-items-center">
                    <i class="fa-brands fa-xl mx-2 fa-whatsapp bd-placeholder-img rounded" width="52" height="52"></i>
                    <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span class="text-gray-dark">Kontak</span>
                        </div>
                        <input type="number" name="kontak" value="{{ old('kontak',$student->kontak) }}" class="form-control-sm form-control @error('kontak')
                            is-invalid
                            @enderror">
                        @error('kontak')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="media text-muted pt-3 d-flex align-items-center">
                    <i class="fa-solid fa-xl mx-2 fa-envelope bd-placeholder-img rounded" width="52" height="52"></i>
                    <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span class="text-gray-dark">Alamat Email</span>
                        </div>
                        <input type="email" name="email" value="{{ old('email',$student->email) }}" class="form-control-sm form-control @error('email')
                            is-invalid
                            @enderror">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="media text-muted pt-3 d-flex align-items-center">
                    <i class="fa-solid fa-xl mx-2 fa-camera bd-placeholder-img rounded" width="52" height="52"></i>
                    <div class="media-body mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <span class="text-gray-dark">Upload Foto</span>
                        </div>
                        <input type="hidden" name="oldImage" value="{{ $student->image }}">
                        <input type="file" name="image" id="image" class=" @error('image')
                            is-invalid
                            @enderror" onchange="previewImage()">
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="media text-muted pt-3 d-flex align-items-center">
                    <div class="media-body mb-0 small lh-125 border-bottom border-gray text-right">
                        <a href="{{ route('daftar.index') }}" class="btn btn-sm btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-sm btn-success">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@push('js')
@include('dashboard.daftar.script')
@endpush