@extends('layout.app')

@section('main')
    @include('components.jumbo')

    <section id="jumbo_comic" style="height: 100px; border-bottom: 1px solid green">

        <div class="myContainer">
            <div class="comic_row row">
                <div class="col">

                    <div class="img position-relative">
                        <img src="{{$comics[0]['thumb']}}" style="height:300px;
                            border: 1px solid white" alt="#"
                        >
                        <p style=" top: 0;
                        padding: 0.2rem;
                        margin: 1px;"
                        >
                            COMIC BOOK
                        </p>
                        <P style="bottom: 0;
                        width: calc(100% - 2px);
                        text-align: center;
                        margin-left: 1px;"
                        >
                            VIEW GALLERY
                        </P>
                    </div>

                </div>
            </div>
        </div>

    </section>
    {{-- 
        / JUMBO COMIC 
    --}}


    <section id='price_info' class="py-5">
        <div class="myContainer">
            <div class="row">
                <div class="col-9">
                    <h3 style="text-transform: uppercase; color: #043f5e">
                       <strong> {{$comics[0]['title']}} </strong>
                    </h3>
                    {{-- /title --}}

                    <div class="col-12 d-flex">
                        <div class="col-9 d-flex">
                            <p>
                               U.S. Price: {{$comics[0]['price']}}
                            </p>
                            <p>
                                AVAIABLE
                            </p>
                        </div>
                        <div class="col-3">
                            Check Avaiability <i class="fas fa-sort-down"></i>
                        </div>
                        {{-- /price --}}
                    </div>
                    <p>
                        {{$comics[0]['description']}}
                    </p>

                </div>
                <div class="col-3">
                    <img src="{{ asset('/img/adv.jpg') }}" alt="#">
                </div>
            </div>
        </div>
    </section>
    {{--
         / PRICE_INFO 
    --}}


    <section id='comic_info' class="py-5" style="background-color: #f6f6f6; border-top: 1px solid lightgray">
        <div class="myContainer">
            <div class="row">
                <div class="col-6">
                    <h4>
                        Talent
                    </h4>
                </div>
                <div class="col-6">
                    <h4>
                        Specs
                    </h4>
                </div>
            </div>
            {{-- 
                /comic info
                --}}
            <div class="row">
                <div class="col-3">item</div>
                <div class="col-3">item</div>
                <div class="col-3">item</div>
                <div class="col-3">item</div>
            </div>
        </div>
    </section>
@endsection