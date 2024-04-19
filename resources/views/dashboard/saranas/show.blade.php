@extends('components.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    Data Lengkap
                </div>
                <div>
                    <a href="{{ route('asarana.edit', $sarana->slug) }}">
                        <i class="fa-solid fa-edit"></i>
                    </a>
                    <a href="{{ route('asarana.index') }}">
                        <i class="fa-solid fa-xmark"></i>
                    </a>
                </div>

            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">
                    @if ($sarana->image)
                    <img class=" img-fluid" src="{{ asset('storage/'.$sarana->image)}}" alt="Generic placeholder image"
                        width="340" height="340">
                    @else
                    <img class=" img-fluid"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                        alt="Generic placeholder image" width="340" height="340">
                    @endif
                </li>
                <li class="list-group-item">
                    Nama Sarana Prasarana : <strong>{{ $sarana->name }}</strong>
                </li>
                <li class="list-group-item">
                    <article>
                        {!! $sarana->body !!}
                    </article>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-3 d-none d-md-flex">
        <img src="{{ asset('backend/img/undraw_designer_girl_re_h54c.svg') }}" class="img-fluid">
    </div>
</div>
@endsection