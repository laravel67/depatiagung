<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('favicon-32x32.png') }}" type="image/x-icon">
    <title>Cetak Formulir PPDB</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        /* CSS untuk styling KOP */
        .container {
            border-bottom: 3px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
            display: flex;
            text-align: center;
            align-items: center;
            width: 100%;
        }

        .kop-logo {
            width: 100px;
            /* Sesuaikan ukuran logo */
            height: auto;
            margin-right: 20px;
        }

        .kop-title {
            font-size: 30px;
            font-weight: 900;
            text-align: center;
            width: 100%;
        }

        .form-group {
            margin-bottom: 15px;
        }


        input[type="text"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .pasfoto {
            width: 1.3in;
            /* Lebar foto */
            height: 1.6in;
            /* Tinggi foto */
            border: 1px solid black;
            /* Border foto */
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="d-flex align-items-center">
            <img src="{{ asset('Untitled-1_copy-removebg-preview.png') }}" alt="Logo Lembaga" class="kop-logo">
            <div class="col-12">
                <h4 class="text-center">Pondok Pesantren Tahfiz Al-qur'an Wal Hadits</h4>
                <h1 class="kop-title text-center">AL-MUNAWWAROH BANGKO</h1>
                <div class="text-center">Jl. Lintas Sumatera, Dusun Bangko, Bangko, Kabupaten Merangin, Jambi 37311
                </div>
                <div class="text-center">Telp: (0123) 456789 | Email: info@lembaga-xyz.com</div>
            </div>
        </div>
    </div>
    <h3 class="text-center font-weight-bold">Formulir Penerimaan Peserta Didik Baru</h3>
    <h3 class="text-center font-weight-bold mb-3">Tahun Ajaran 2024/2025</h3>
    <div class="form-group row">
        <strong class="col-sm-3">No. Pendaftaran</strong>
        <div class="col-sm-1">
            <input type="text" class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                value="{{ $data->id }}">
        </div>
    </div>
    <div class="form-group row mb-1">
        <label for="no_identitas" class="col-sm-3 col-form-label">No Identitas</label>
        <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                value="{{ $data->no_identitas }}">
        </div>
    </div>
    <div class="form-group row mb-1">
        <label for="nama_calon_siswa" class="col-sm-3 col-form-label">Nama Calon Siswa</label>
        <div class="col-sm-6">
            <input type="text" class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                value="{{ $data->nama }}">
        </div>
    </div>
    <div class="form-group row mb-1">
        <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat/Tanggal Lahir</label>
        <div class="col-sm-6">
            <input type="text" class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                value="{{ $data->tempat_lahir ?? '' }}, {{ $data->tanggal_lahir ? \Carbon\Carbon::parse($data->tanggal_lahir)->locale('id')->translatedFormat('d F Y') : '' }}"
            >
        </div>
    </div>
    <div class="form-group row mb-1">
        <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-2">
            <input type="text" class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
             value="{{ $data->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}">
        </div>
    </div>
    <div class="form-group row mb-1">
        <label for="agama" class="col-sm-3 col-form-label">Agama</label>
        <div class="col-sm-2">
            <input type="text" class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                value="{{ $data->agama }}">
        </div>
    </div>
    <div class="form-group row mb-1">
        <label for="kewarganegaraan" class="col-sm-3 col-form-label">Kewarganegaraan/Negara</label>
        <div class="col-sm-8 d-flex">
            <input class="form-control form-control-sm border-dark rounded-0 mr-3 font-weight-bold text-dark"
                value="{{ $data->kewarganegaraan }}">
            <input class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                value="{{ $data->negara }}">
        </div>
    </div>
    <div class="form-group row mb-1">
        <label for="provinsi" class="col-sm-3 col-form-label">Provinsi/Kabupaten/Kecamatan</label>
        <div class="col-sm-8 d-flex">
            <input class="form-control form-control-sm border-dark rounded-0 mr-1 font-weight-bold text-dark"
                value="{{ $data->provinsi }}">
            <input class="form-control form-control-sm border-dark rounded-0 mr-1 font-weight-bold text-dark"
                value="{{ $data->kabupaten }}">
            <input class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                value="{{ $data->kecamatan }}">
        </div>
    </div>
    <div class="form-group row mb-1">
        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                value="{{ $data->alamat }}">
        </div>
    </div>
    <div class="form-group row mb-1">
        <label for="kode_pos" class="col-sm-3 col-form-label">Kode Pos</label>
        <div class="col-sm-2">
            <input type="text" class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                value="{{ $data->kode_pos }}">
        </div>
    </div>
    <div class="form-group row mb-1">
        <label class="col-sm-3 col-form-label">Nama Orang Tua</label>
        <div class="col-sm-8">
            <div class="row">
                <div class="d-flex col align-items-center">
                    <label class="ml-2">Ayah</label>
                    <input type="text"
                        class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                        value="{{ $data->nama_ayah }}">
                </div>
                <div class="d-flex col align-items-center">
                    <label class="ml-2">Ibu</label>
                    <input type="text"
                        class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                        value="{{ $data->nama_ibu }}">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mb-1">
        <label class="col-sm-3 col-form-label">Pekerjaan Orang Tua</label>
        <div class="col-sm-8">
            <div class="row">
                <div class="d-flex col align-items-center">
                    <label class="ml-2">Ayah</label>
                    <input type="text"
                        class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                        value="{{ $data->pekerjaan_ayah }}">
                </div>
                <div class="d-flex col align-items-center">
                    <label class="ml-2">Ibu</label>
                    <input type="text"
                        class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                        value="{{ $data->pekerjaan_ibu }}">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mb-1">
        <label class="col-sm-3 col-form-label">Kontak Orang Tua</label>
        <div class="col-sm-8">
            <div class="row">
                <div class="d-flex col align-items-center">
                    <label class="ml-2">Ayah</label>
                    <input type="text"
                        class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                        value="{{ $data->telphone_ayah }}">
                </div>
                <div class="d-flex col align-items-center">
                    <label class="ml-2">Ibu</label>
                    <input type="text"
                        class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                        value="{{ $data->telphone_ibu }}">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mb-1">
        <label for="asal_sekolah" class="col-sm-3 col-form-label">Asal Sekolah</label>
        <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                value="{{ $data->asal_sekolah }}">
        </div>
    </div>
    <div class="form-group row mb-1">
        <label for="status" class="col-sm-3 col-form-label">Status</label>
        <div class="col-sm-4">
            <input class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                value="{{ $data->status === 'baru' ? 'Siswa Baru' : 'Siswa Pindahan' }}">
        </div>
    </div>
    <div class="form-group row mb-1">
        <label for="jenjang" class="col-sm-3 col-form-label">Jenjang</label>
        <div class="col-sm-4">
            <input class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                value="{{ $data->jenjang === 'ma' ? 'Madrasah Aliyah' : 'Madrasah Tsanawiyah' }}">
        </div>
    </div>
    <div class="form-group row mb-1">
        <label for="kontak" class="col-sm-3 col-form-label">Kontak/Email</label>
        <div class="col-sm-8 d-flex">
            <input class="form-control form-control-sm border-dark rounded-0 mr-3 font-weight-bold text-dark"
                value="{{ $data->kontak}}">
            <input class="form-control form-control-sm border-dark rounded-0 font-weight-bold text-dark"
                value="{{ $data->email }}">
        </div>
    </div>
    <div class="mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-4">
                <strong class="text-center">Ketua Penitia PPDB</strong>
                <br>
                <br>
                <br>
                <br>
                <strong class="text-center">( ....................... )</strong>
            </div>
            <div class="col-4">
                <strong class="text-center">Calon Siswa Baru</strong>
                <br>
                <br>
                <br>
                <br>
                <strong class="text-center">( {{ $data->nama }} )</strong>
            </div>
            <div class="col-4">
                <strong class="pasfoto">Pasfoto 3x4</strong>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <strong>Catatan: Lembar ini dibawa saat melakukan pendaftaran ulang</strong>
    </div>
    <script>
        window.onload = function() {
                // Cetak halaman
                window.print();
            };
          window.onbeforeprint = function() {
            setTimeout(function() {
            window.history.back();
            }, 100); // Waktu tunggu sebelum kembali, di sini saya atur 100 milidetik (opsional)
            };
    </script>
</body>

</html>