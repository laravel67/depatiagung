<div class="d-block align-items-center text-center my-5 text-white-50 bg-purple rounded shadow-sm">
    <div class="px-2">
        <img class="mt-3" src="{{ asset('logo_depati_aguung.png') }}" alt="" width="80" height="80"><br>
        <h3 class="mb-0">Pondok Pesantren Salafiyah</h3>
        <h3 class="text-white mb-0 text-uppercase">Depati Agung</h3>
        <h6 class="mb-0 py-0">"Mendidik dengan sepenuh hati"</h6>
        <p class="text-warning mt-0">Pulau Raman, Muara Siau, Merangin Regency, Jambi 37371, Indonesia. </p>
    </div>
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($posts as $key => $slide)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" @if($key===0) class="active" @endif>
        </li>
        @endforeach
    </ol>
    <div class="carousel-inner bg-secondary">
        @foreach($posts as $key => $slide)
        <div class="carousel-item @if($key === 0) active @endif">
            @if ($slide->image)
                <img src="{{ asset('frontend/img/da2.jpeg') }}" class="d-block w-100" alt="{{ $slide->title }}">
            @else
                <img src="{{ asset('frontend/img/santris.jpeg') }}" class="d-block w-100 h-50" alt="{{ $slide->title }}" >
            @endif
            <div class="carousel-caption rounded-3" style="background-color:rgba(0, 0, 0, 0.5)">
                <h5 class="text-light">{{ $slide->title }}</h5>
                <p class="text-light d-none d-md-block">{{ $slide->excerpt }}</p>
            </div>
        </div>
        @endforeach
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