@extends('layout.app')

@section('main')

@include('components.jumbo')
<!-- / JUMBO -->

<section id="comics" class="py-4">
    <div class="container">
        <div class="row g-3">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <img class="img-fluid" src="{{$comic['thumb']}}" alt="#">
                    <p>
                        {{ $comic['title'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- / COMICS -->

<section id="shop" class="py-4">
    <div class="container">
        <div class="row">

            <div class="col">
                <p>shopNav-item</p>
            </div>

            <div class="col">
                <p>shopNav-item</p>
            </div>

            <div class="col">
                <p>shopNav-item</p>
            </div>

            <div class="col">
                <p>shopNav-item</p>
            </div>

            <div class="col">
                <p>shopNav-item</p>
            </div>
        </div>
    </div>
</section>
<!-- / SHOP -->

@endsection