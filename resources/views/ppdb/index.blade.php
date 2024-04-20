@extends('ppdb.layouts.app')
@section('content')
<div class="my-5">
    @isset($images)
    @foreach ($images as $image)
    <img class="img-fluid" src="{{ asset('storage/'.$image) }}" alt="">
    @endforeach
    @else
    <p>Tidak ada gambar yang ditemukan.</p>
    @endisset
</div>
@endsection