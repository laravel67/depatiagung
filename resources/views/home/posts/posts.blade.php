@extends('components.frontend.layouts.app')
@section('content')
<header class="blog-header pt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="text-dark">All Post: {{ $subtitle }}</div>
        </div>
        <div class="col-md-6">
            <form class=" d-flex justify-content-end align-items-center" action="{{ route('posts') }}">
                @if (request('category', 'author', 'unit'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                <input type="hidden" name="author" value="{{ request('author') }}">
                {{-- <input type="hidden" name="unit" value="{{ request('unit') }}"> --}}
                @endif
                <input class="form-control form-control-sm mx-md-2" type="search" name="search" placeholder="Search..."
                    value="{{ Request('search') }}">
                <button class="btn btn-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-end m-0 p-0">
        {!! $shareComponent !!}
    </div>
</header>
<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between bg-primary">
        <a class="p-2 text-light" href="{{ route('posts') }}"><strong>Semua</strong></a>
        @foreach ($categories as $category)
        <a class="p-2 text-light" href="{{ route('posts', ['category' => $category->slug]) }}">{{ $category->name
            }}</a>
        @endforeach
    </nav>
</div>
<div>
    @if (!$posts->isEmpty())
    <div class="row">
        <div class="col mb-4" data-aos="zoom-in" data-aos-duration="1000">
            <div class="card box-shadow p-4">
                @if ($posts[0]->image)
                <img class="card-img-top" src="{{ asset('storage/'.$posts[0]->image) }}"
                    style="height: 400px; width: 100%; display: block;">
                @else
                <img class="card-img-top" src="https://source.unsplash.com/1200x600?{{ $posts[0]->category->name }}"
                    style="height: 400px; width: 100%; display: block;">
                @endif
                <div class="card-body">
                    <h4 class="mb-0 text-dark font-weight-bold">{{ $posts[0]->title }}</h4>
                    <p class="card-text text-dark">
                        {{ $posts[0]->excerpt }}
                        <a href="{{ route('post',$posts[0]->slug) }}">Selengkapnya</a>
                    </p>
                    <div class="d-flex align-items-center">
                        <div>
                            <a href="{{ route('posts', ['author' => $posts[0]->author->username]) }}"
                                class="badge badge-light">
                                <i class="fa-solid fa-user-tie"></i> {{
                                $posts[0]->author->name }}
                            </a>
                            <a href="{{ route('posts', ['category' => $posts[0]->category->slug]) }}"
                                class="badge badge-light">
                                <i class="fa-solid fa-tag"></i> {{
                                $posts[0]->category->name }}
                            </a>
                            <small class="text-muted text-end">
                                <i class="fa-solid fa-calendar-days"></i>
                                {{
                                \Carbon\Carbon::parse($posts[0]->created_at)->locale('id')->translatedFormat('d F
                                Y')}} /
                                <i class="fa-regular fa-clock"></i>
                                {{ $posts[0]->created_at->diffForHumans() }}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-4" data-aos="zoom-out" data-aos-duration="1000">
            <div class="card">
                <a href="{{ route('posts', ['category' => $post->category->slug]) }}"
                    style="position: absolute;background-color:rgba(0, 0, 0, 0.5)"
                    class="w-100 py-1 text-white text-center text-decoration-none">
                    {{$post->category->name }}
                </a>
                <a href="{{ route('post',$post->slug) }}" class="text-decoration-none">
                    <div class="mb-4 box-shadow">
                        @if ($post->image)
                        <img class="card-img-top" src="{{ asset('storage/'.$post->image) }}"
                            style="height: 225px; width: 100%; display: block;">
                        @else
                        <img class="card-img-top" src="https://source.unsplash.com/1200x600?{{ $post->category->name }}"
                            style="height: 225px; width: 100%; display: block;">
                        @endif
                        <div class="card-body">
                            <h6 class="mb-0 text-success font-weight-bold">{{ $post->title }}</h6>
                            <p align='justify' class="card-text text-dark">{{ $post->excerpt }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="{{ route('posts', ['author' => $post->author->username]) }}"
                                        class="badge badge-light">
                                        <i class="fa-solid fa-user-tie"></i> {{
                                        $post->author->name }}
                                    </a>
                                </div>
                                <small class="text-muted">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    {{
                                    \Carbon\Carbon::parse($post->created_at)->locale('id')->translatedFormat('d F
                                    Y')}}
                                </small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <small class="d-flex align-items-center justify-content-md-end mt-3" style="overflow: hidden">
        {{ $posts->links('pagination::bootstrap-4') }}
    </small>
    @else
    <div class="d-flex justify-content-center">
        <img src="{{ asset('frontend/img/undraw_page_not_found_re_e9o6.svg') }}" alt="" srcset="" class="img-fluid"
            width="300">
        <strong class="text-danger" for="">Tidak ada postingan</strong>
    </div>
    @endif
</div>
@endsection

<style>
    .bg {
        background-image: url();
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover
    }
</style>