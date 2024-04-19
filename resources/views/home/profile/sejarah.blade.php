@extends('components.frontend.layouts.app')
@section('content')
@include('home.profile.header')
<div class="card mb-3">
    <img src="{{ asset('frontend/icons/download.jpeg') }}" class="card-img-top" alt="..." data-aos="fade-up"
        data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
    <div class="card-body" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
        <h5 class="card-title">SEJARAH SINGKAT PONDOK PESANTREN TAHFIDZ AL-QURAN WAL HADITS ALMUNAWWAROH</h5>
        <article align="justify" class="card-text blockquote">
            Pondok Pesantren tahfidz Al- Quran Wal Hadits ( Talwah) Al- Munawwaroh Sei. Misang Bangko di dirikan oleh
            Bapak H.
            Rotani Yutaka, SH ( B upati Merangin Periode 1998-2008) pada bulan Juni tahun 2001. Ketua Yayasan Hj.Maznah
            Rotani.
            Pontren “Talwah” Al- Munawwaroh ini terletak di tengah kota Bangko sekitar 1 km dari pusat Kota adalah
            Lembaga
            Pendidikan Agama yang :
            <p>
                1. Mengutamakan penanaman nilai –nilai agama yang benar, lansung di fahami dari Kitabullah sehingga
                dapat di
                amalkan
                sebagai sunnah Rasul
            </p>
            <p>
                2. Menyelenggarakan Pendidikan berskala Nasional dengan memadukan kurikulum Diknas dan kurikulum Depag
                serta
                Kepesantrenan
            </p>
            <p>
                3. Menanam kedisplinan, nilai- nilai yang luhur serta akhlak yang mulia kepada tenaga edukatif dan murid
                dengan
                melaksanakan programpembinaan intensif di asrama.
            </p>
        </article>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
</div>
@endsection