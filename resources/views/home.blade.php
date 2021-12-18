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

            @foreach ($comics as $comic)
                <div class="col-2 myCard">
                    <img src="{{$comic['thumb']}}" alt="#">
                    <p>
                        {{ $comic['title'] }}
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

<section id="shop" class="py-4">
    <div class="container">
        <div class="row">

           <!--  @foreach ($shopItems as $item)

                <div class="col">
                    <p>
                        {{$item['title']}}
                    </p>
                </div>

            @endforeach -->

        </div>
    </div>
</section>
<!-- / SHOP -->

@endsection