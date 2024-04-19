@extends('components.frontend.layouts.app')
@section('content')
@include('home.profile.header')
<div class="bg-white px-3 py-2 mb-2">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button"
                role="tab" aria-controls="nav-profile" aria-selected="true">Profile</button>
            <button class="nav-link" id="nav-deskripsi-tab" data-toggle="tab" data-target="#nav-deskripsi" type="button"
                role="tab" aria-controls="nav-deskripsi" aria-selected="false">Deskripsi</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active mt-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <ul class="list-group list-group-flush">
                <li class="list-group-item form-group mb-0">
                    <small class="mb-0">Nama PPS</small>
                    <div class="mb-0"><strong>Depati Agung</strong></div>
                </li>
                <li class="list-group-item form-group mb-0">
                    <small class="mb-0">NSPP</small>
                    <div class="mb-0"><strong>510015020104</strong></div>
                </li>
                <li class="list-group-item form-group mb-0">
                    <small class="mb-0">Alamat Lengkap PPS</small>
                    <div class="mb-0"><strong>Jalan : Bangko – Jangkat Km. 45
                            Desa/Kelurahan : Desa Pulau Raman
                            Kecamatan : Muara Siau
                            Kab/Kota : Merangin
                            Propinsi : Jambi
                            No. Telp : -</strong></div>
                </li>
                <li class="list-group-item form-group mb-0">
                    <small class="mb-0">NPWP</small>
                    <div class="mb-0"><strong>02.371.140.0-332.000</strong></div>
                </li>
                <li class="list-group-item form-group mb-0">
                    <small class="mb-0">Nama Pimpinan PPS</small>
                    <div class="mb-0"><strong>KH. SOLIHIN</strong></div>
                </li>
                <li class="list-group-item form-group mb-0">
                    <small class="mb-0">No. Tlp/HP</small>
                    <div class="mb-0"><strong>085377662658</strong></div>
                </li>
                <li class="list-group-item form-group mb-0">
                    <small class="mb-0">Nama Yayasan</small>
                    <div class="mb-0"><strong>Yayasan Pondok Pesantren Salafiyah Depati Agung</strong></div>
                </li>
                <li class="list-group-item form-group mb-0">
                    <small class="mb-0">Alamat Yayasan</small>
                    <div class="mb-0"><strong>Jalan Bangko – Jangkat Km 34 Desa Pulau Raman</strong></div>
                </li>
                <li class="list-group-item form-group mb-0">
                    <small class="mb-0">No. Tlp Yayasan</small>
                    <div class="mb-0"><strong>085378507111</strong></div>
                </li>
                <li class="list-group-item form-group mb-0">
                    <small class="mb-0">No. Akte Pendirian Yayasan</small>
                    <div class="mb-0"><strong>C-1170.HT.01.02 TH. 2007</strong></div>
                </li>
                <li class="list-group-item form-group mb-0">
                    <small class="mb-0">Kepemilikan Tanah</small>
                    <div class="mb-0"><strong>Milik Yayasan</strong></div>
                </li>
                <li class="list-group-item form-group mb-0">
                    <small class="mb-0">Status Tanah</small>
                    <div class="mb-0"><strong>Milik Yayasan</strong></div>
                </li>
                <li class="list-group-item form-group mb-0">
                    <small class="mb-0">Luas Tanah</small>
                    <div class="mb-0"><strong>1.5 Ha</strong></div>
                </li>
                <li class="list-group-item form-group mb-0">
                    <small class="mb-0">Status Bangunan</small>
                    <div class="mb-0"><strong>Milik Yayasan</strong></div>
                </li>
                <li class="list-group-item form-group mb-0">
                    <small class="mb-0">Luas Bangunan</small>
                    <div class="mb-0"><strong>803 M2</strong></div>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade mt-2" id="nav-deskripsi" role="tabpanel" aria-labelledby="nav-deskripsi-tab">
            <article align="justify">
                <p>
                    Ponpes Salafiyah Depati Agung merupakan salah satu pondok pesantren yang ada di Kabupaten Merangin. Adapun belajar
                    mengajar di ponpes ini menggunakan kurikulum yang berlaku di tambah dengan ilmu agama. Ada juga kegiatan-kegiatan
                    ekstrakulikuler sekolah untuk santri seperti karate, basket, futsal, grup belajar dan lainnya.
                </p>
                <p>
                    Ponpes Salafiyah Depati Agung memiliki staf pengajar uztad/uztazah serta guru yang kompeten pada bidang pelajarannya
                    masing-masing sehingga berkualitas dan menjadi salah satu pesantren terbaik di Kabupaten Merangin. Tersedia juga
                    berbagai fasilitas seperti ruang kelas yang nyaman, asrama yang nyaman, laboratorium praktikum, perpustakaan, lapangan
                    olahraga, kantin, masjid dan lainnya.
                </p>
                <p>
                    Segera kunjungi ponpes terdekat ini untuk info pendaftaran, biaya pendaftaran, info biaya SPP, info kurikulum, info
                    pesantren di Kabupaten Merangin, nomor NPSN dan lainnya. Anda juga bisa menghubungi kontak atau mengakses link <a href="{{ route('ppdb.home') }}">PPDB</a>.
                </p>
            </article>
        </div>
    </div>
</div>
<div class="card mb-2">
    <div class="card-header">
        <strong>Lambang</strong>
    </div>
    <div class="card-body">
        <article >
            <p align='justify'>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero magnam consectetur corporis architecto,
                deleniti
                molestias eos consequatur fugit placeat atque harum aut sint officia omnis iste commodi, ea doloremque
                quia
                nemo.
                Cum veritatis dolor, tenetur excepturi corrupti optio voluptate corporis enim aperiam quos animi cumque,
                quas
                quae
                laudantium facilis recusandae fugit minima sint, voluptatem atque culpa soluta nisi. Molestiae ipsam
                aspernatur
                quidem iste accusamus? Nemo quis praesentium consectetur, suscipit eveniet voluptas excepturi temporibus
                ex quos
                quae maxime minus repudiandae quod sint totam, atque hic, ut explicabo omnis inventore. Eaque qui
                aliquid
                dolores
                aperiam atque rem beatae? Quasi quas sed excepturi!
            </p>
        </article>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <strong>Hymne Pondok</strong>
    </div>
    <div class="card-body">
        <article >
            <p align='justify'>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero magnam consectetur corporis architecto,
                deleniti
                molestias eos consequatur fugit placeat atque harum aut sint officia omnis iste commodi, ea doloremque
                quia
                nemo.
                Cum veritatis dolor, tenetur excepturi corrupti optio voluptate corporis enim aperiam quos animi cumque,
                quas
                quae
                laudantium facilis recusandae fugit minima sint, voluptatem atque culpa soluta nisi. Molestiae ipsam
                aspernatur
                quidem iste accusamus? Nemo quis praesentium consectetur, suscipit eveniet voluptas excepturi temporibus
                ex quos
                quae maxime minus repudiandae quod sint totam, atque hic, ut explicabo omnis inventore. Eaque qui
                aliquid
                dolores
                aperiam atque rem beatae? Quasi quas sed excepturi!
            </p>
        </article>
        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </div>
</div>
@endsection