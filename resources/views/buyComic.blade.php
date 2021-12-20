@extends('layout.app')

@section('main')
    @include('components.jumbo')

    <section id="jumbo_comic" style="height: 100px;">

        <div class="myContainer">
            <div class="comic_row row">
                <div class="col">

                    <div class="img position-relative">
                        <img src="{{$comic['thumb']}}" style="height:300px;
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
                       <strong> {{$comic['title']}}  </strong>
                    </h3>
                    {{-- /title --}}

                    <div class="comic_price col-12 d-flex px-2 my-3">
                        <div class="col-9 d-flex justify-content-between">
                            <p>
                              <strong> <span class="price-color"> U.S. Price: </span> {{$comic['price']}} </strong> 
                            </p>
                            <p class="price-color pe-2" style="border-right: 1px solid green">
                               <strong> AVAIABLE </strong> 
                            </p>
                        </div>
                        <div class="col-3 ps-2">
                           <strong> Check Avaiability <i class="fas fa-sort-down"></i> </strong>
                        </div>
                        {{-- /price --}}
                    </div>
                    <p>
                        {{$comic['description']}}
                    </p>

                </div>
                <div class="col-3">
                    <img src="{{ asset('/img/spot.jpg') }}" alt="#">
                </div>
            </div>
        </div>
    </section>
    {{--
         / PRICE_INFO 
    --}}


    <section id='comic_info' class="pt-5" style="background-color: #f6f6f6; border-top: 1px solid lightgray">
        <div class="myContainer">
            <div class="row my-5">
                <div class="col-6">
                    <h4 class="py-3">
                        Talent
                    </h4>
                    <div class="col-12 d-flex py-2">
                        <p style="color: #0e567a; width: 400px" class="fw-bold">
                            Art by:
                        </p>
                        <p class="fw-bold" style="color: #00a9d9; font-size: 0.8rem">
                           @foreach ($comic['artists'] as $artist)
                             {{$artist}} 
                           @endforeach 
                        </p>
                    </div>
                    {{-- /artists --}}
                    <div class="col-12 d-flex py-2">
                        <p class="fw-bold" style="color: #043f5e; width: 400px">
                            Written by:
                        </p>
                        <p class="fw-bold" style="color: #00a9d9; font-size: 0.8rem">
                            @foreach ($comic['writers'] as $writer)
                                {{$writer}}
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="pirce-col-6 col-6 ps-5">
                    <h4 class="py-3">
                        Specs
                    </h4>
                    <p>
                        Series: <span class="serie">{{$comic['series']}}</span>
                    </p>
                    <p>
                        U.S. Price: <span>{{$comic['price']}}</span>
                    </p>
                    <p>
                        On Sale Date: <span>{{$comic['sale_date']}}</span>
                    </p>
                </div>
            </div>
            {{-- 
                /comic info
                --}}


            <div class="items row" style="
            height: 60px;
            line-height: 60px;"
            >
                <div class="col-3 fw-bold">DIGITAL COMICS</div>
                <div class="col-3 fw-bold">SHOP DC</div>
                <div class="col-3 fw-bold">COMIC SHOP LOCATOR</div>
                <div class="col-3 fw-bold">SUBSCRIPTION</div>
            </div>
        </div>
    </section>
@endsection