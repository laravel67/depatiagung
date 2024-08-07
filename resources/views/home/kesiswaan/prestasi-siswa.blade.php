<x-content>
    <x-profile-header />
    <div class="card mt-3 mb-1">
        <div class="card-body">
            <div class="container marketing">
                @forelse ($posts as $post)
                <div class="row featurette">
                    <div class="col-md-7 {{ $i % 2 == 0 ? 'order-md-2' : '' }}" data-aos="flip-up"
                        data-aos-duration="10000">
                        <h2 class="featurette-heading text-success" data-aos="fade-right" data-aos-offset="300"
                            data-aos-="aese-in-sine">
                            {{ $post->title }}
                        </h2>
                        <p class="lead">
                            {!! $post->body !!}
                        </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        @if ($post->image)
                        <img data-aos="zoom-in" data-aos-duration="5000" src="{{ asset('storage/'.$post->image) }}"
                            width="250" height="250" style="overflow: hidden" class="img-fluid">
                        @else
                        <x-image-default/>
                        @endif
                    </div>
                </div>
                <hr class="featurette-divider">
                @empty
                <div class="col text-center">
                    <img src="{{ asset('frontend/img/clipboard.png') }}" alt="" srcset="" class="img-fluid" width="400">
                </div>
                @endforelse
            </div>
        </div>
        <small class="d-flex align-items-center justify-content-end m-3" style="overflow: hidden">
            {{ $posts->links('pagination::bootstrap-4') }}
        </small>
    </div>
</x-content>