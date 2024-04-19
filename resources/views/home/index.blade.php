@extends('components.frontend.layouts.app')
@section('content')
@include('home.carousel')
<div class="my-5 my-md-3 p-3 bg-white rounded shadow-sm">
    <h3 class="pb-2 mb-0 text-success">Postingan Terbaru</h3>
    <div class="row justify-content-center">
        
    </div>
</div>
{{-- Berita --}}
<div class="row">
    <div class="col-md-4 order-md-last">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="my-md-3 p-3 bg-white rounded shadow-sm">
                    <h6 class="pb-2 mb-0 text-success card-header mx-0">Sambutan Pimpinan PPS DEPATI AGUNG</h6>
                    <div class="block">
                        <div class="p-3">
                            <img src="{{ asset('frontend/img/Pimpinan.jpg') }}" alt="" srcset="" class="img-fluid">
                        </div>
                        <article align="justify">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur sint dolore voluptatum
                            nostrum
                            est rem inventore officiis optio unde sapiente <a href="">Selengkapnya...</a>,
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide my-5 my-md-3 bg-white rounded shadow-sm" data-ride="carousel">
                    <h6 class="pb-2 text-success card-header">Galeri</h6>
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active">
                            <img src="{{ asset('frontend/icons/images.jpeg') }}" alt="..." class="d-block img-fluid w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/icons/images.jpeg') }}" alt="..." class="d-block img-fluid w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/icons/images.jpeg') }}" alt="..." class="d-block img-fluid w-100">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 order-md-first">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h5 class="pb-2 mb-0 text-success card-header">Postingan Terbaru</h5>
            @forelse ( $posts as $post )
            <div class="media text-muted pt-3 d-flex align-items-center" data-aos="zoom-in" data-aos-duration="500">
                @if ($post->image)
                <img src="{{ asset('storage/'.$post->image) }}" alt="" width="80" height="80"
                    class="img-fluid mr-2 d-none d-lg-block">
                @else
                <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" alt="" width="80"
                    height="80" class="img-fluid mr-2 d-none d-lg-block">
                @endif
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark"><a href="{{ route('post',$post->slug) }}">{{ $post->title
                                }}</a></strong>
                    </div>
                    <span class="d-block">
                        {{ $post->excerpt }} <a href="{{ route('post',$post->slug) }}">Selengkapnya</a>
                    </span>
                    @if ($post->author)
                    <a href="{{ route('posts', ['author' => $post->author->username]) }}" class="badge badge-light">
                        <i class="fa-solid fa-user-tie"></i> {{ $post->author->name }}
                    </a>
                    @else
                    <span class="badge badge-light text-muted">Unknown Author</span>
                    @endif
                    <small class="text-muted">
                        <i class="fa-solid fa-calendar-days"></i>
                        {{
                        \Carbon\Carbon::parse($post->created_at)->locale('id')->translatedFormat('d F
                        Y')}}
                    </small>
                </div>
            </div>
            @empty
            <p class="text-muted">
                Belum ada berita yang dipublish
            </p>
            @endforelse
            <div class="text-right mt-2">
                <a href="{{ route('posts') }}" class="btn btn-success"><i class="fa-regular fa-newspaper"></i> Semua Berita</a>
            </div>
        </div>
    </div>
</div>
@endsection
