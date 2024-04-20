@extends('components.layouts.app')
@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab"
            aria-controls="home" aria-selected="true">Kelola Ekstra Kulikuler</button>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        @livewire('kesiswaan.ekstrakulikuler')
    </div>
</div>
@endsection