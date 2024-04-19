@extends('components.frontend.layouts.app')
@section('content')
@include('home.profile.header')
<div class="card mt-3 mb-1">
    <div class="card-body">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-duration="1000">
            @if (!$saranas->isEmpty())
            @foreach ($saranas as $sarana)
            <div class="col-md-4">
                <div class="card mb-4">
                    @if ($sarana->image)
                    <img src="{{ asset('storage/'.$sarana->image) }}" class="bd-placeholder-img card-img-top"
                        width="100%" height="225">
                    @else
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">Thumbnail</text>
                    </svg>
                    @endif

                    <div class="card-body">
                        <p class="card-text">
                        <h3>{{ $sarana->name }}</h3>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button href="#exampleModalLong{{ $sarana->id }}" data-toggle="modal" type="button"
                                    class="btn btn-sm btn-outline-secondary">Selengkapnya...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-md-4 justify-content-center">
                <img src="{{ asset('frontend/img/undraw_page_not_found_re_e9o6.svg') }}" alt="" srcset=""
                    class="img-fluid" width="300">
            </div>
            @endif
        </div>
    </div>
</div>
@include('home.akademik.modal-detail-sarana')
@endsection