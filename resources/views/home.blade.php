@extends('layout.app')

@section('main')

@include('components.jumbo')
<!-- / JUMBO -->

<section id="comics" class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-2">
                film-card
            </div>
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