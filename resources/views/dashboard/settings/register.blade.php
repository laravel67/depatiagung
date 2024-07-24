@extends('components.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-7">
        @livewire('setting.register')
    </div>
    <div class="col-md-5">
        @livewire('setting.create')
    </div>
</div>
@endsection