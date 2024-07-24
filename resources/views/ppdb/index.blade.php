@extends('ppdb.layouts.app')

@section('content')
<div class="my-5">
    @if ($brosur && $brosur->image)
    <img class="img-fluid" src="{{ asset('storage/brosurs/' . $brosur->image) }}" alt="Brosur">
    @else
    <p class="text-center alert alert-secondary">{{ __('Informasi pendaftaran belum ada.') }}</p>
    @endif
</div>
@endsection