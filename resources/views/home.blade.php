@extends('layout.app')

@section('main')

@include('components.jumbo')
<!-- / JUMBO -->

<section id="comics" class="py-4">
    <div class="container">
        <div class="row g-4">
            <div class="jumboSpan mb-4">
                <span>
                    CURRENT SERIES
                </span>
            </div>

            @foreach ($comics as $index => $comic)
                <div class="col-2 myCard">
                    <a href="{{ route('comic', ['id' => $index])}}"> <img src="{{$comic['thumb']}}" alt="#"> </a> 
                    <p>
                        {{ $comic['series'] }}
                    </p>
                </div>
            @endforeach
            <!-- / cards -->

            <div class="col-12">
                <button>
                    LOAD MORE
                </button>
            </div>

        </div>
    </div>
</section>
<!-- / COMICS -->

<section id="shop" class="py-5">
    <div class="container">
        <div class="row shopItems">
            @include('components.shopItems')
        </div>

    </div>
</section>
<!-- / SHOP -->

@endsection