@extends('layout.app')



@section('content')

    <b-container fluid class="px-0 border-top">
        <div id="homeFlickity">
            <div class="home-cell">
                <img src="{{asset('img/home/bannerwebPTC-lg.png')}}" alt="" class="img-fluid d-none d-lg-block">
                <img src="{{asset('img/home/plan-todos-conectados.png')}}" alt="" class="img-fluid d-lg-none">
            </div>
            <div class="home-cell">
                <img src="{{asset('img/home/BANNER-CONECTADOS.png')}}" alt="" class="img-fluid d-none d-lg-block">
                <img src="{{asset('img/home/BANNER-CONECTADOS-970.png')}}" alt="" class="img-fluid d-lg-none">
            </div>
            <div class="home-cell">
                <img src="{{asset('img/home/BANNER-DUPLICATE.png')}}" alt="" class="img-fluid d-none d-lg-block">
                <img src="{{asset('img/home/BANNER-DUPLICATE-970.png')}}" alt="" class="img-fluid d-lg-none">
            </div>
        </div>
    </b-container>
    <cotizador></cotizador>
    <b-container fluid class="px-0 border-top">
        <b-container fluid style="background-color: #dfe0e4;">
            <b-row class="py-3 text-center text-blue">
                <b-col>
                    <h2 class="mb-0"><strong>Encuentra lo que buscas</strong></h2>
                </b-col>
            </b-row>
        </b-container>
        <b-container fluid class="px-0" style="min-height: 100vw">
            <b-row>
                <b-col>
                    <b-button-group class="home-filters">
                        <b-btn class="home-filter" style="background-color: #046693" data-filter="">Todo</b-btn>
                        <b-btn class="home-filter" style="background-color: #ff7b00;" data-filter=".equipos">Equipos</b-btn>
                        <b-btn class="home-filter" style="background-color: #931787;" data-filter=".tv">TV</b-btn>
                        <b-btn class="home-filter" style="background-color: #0095DB;" data-filter=".movil">Móvil</b-btn>
                        <b-btn class="home-filter" style="background-color: #69c4b4;" data-filter=".fijo">Fijo</b-btn>
                        <b-btn class="home-filter" style="background-color: #fac800;" data-filter=".internet">Internet</b-btn>
                    </b-button-group>
                </b-col>
            </b-row>
            <b-row>
                <b-col>
                    <div id="productGrid">
                        <div class="home-product tv"><img class="img-fluid" src={{asset('img/home/Wb.png')}} alt=""></div>
                        <div class="home-product"><img class="img-fluid" src={{asset('img/home/CNT.png')}} alt=""></div>
                        <div class="home-product equipos"><img class="img-fluid" src={{asset('img/home/nokia.png')}} alt=""></div>
                        <div class="home-product fijo"><img class="img-fluid" src={{asset('img/home/fijo-200.png')}} alt=""></div>
                        <div class="home-product equipos"><img class="img-fluid" src={{asset('img/home/iphone.png')}} alt=""></div>
                        <div class="home-product internet"><img class="img-fluid" src={{asset('img/home/internet-20.png')}} alt=""></div>
                        <div class="home-product equipos destacado"><img class="img-fluid" src={{asset('img/home/samsung.png')}} alt=""></div>
                        <div class="home-product tv"><img class="img-fluid" src={{asset('img/home/fox.png')}} alt=""></div>
                        <div class="home-product movil"><img class="img-fluid" src={{asset('img/home/plan-conectados.png')}} alt=""></div>
                        <div class="home-product movil"><img class="img-fluid" src={{asset('img/home/plan-cnt-plus.png')}} alt=""></div>
                        <div class="home-product tv"><img class="img-fluid" src={{asset('img/home/tv-plan-hd.png')}} alt=""></div>
                        <div class="home-product tv"><img class="img-fluid" src={{asset('img/home/history.png')}} alt=""></div>
                    </div>
                </b-col>
            </b-row>
        </b-container>
    </b-container>
@endsection

@push('css')
<style>
    .home-cell {
        width: 100%; /* full width */
    }
    .flickity-page-dots {
        bottom: 1rem;
    }
    /* white circles */
    .flickity-page-dots .dot {
        width: 12px;
        height: 12px;
        opacity: 1;
        background: transparent;
        border: 2px solid white;
    }
    /* fill-in selected dot */
    .flickity-page-dots .dot.is-selected {
        background: white;
    }
    .home-filters {
        width: 100%;
    }
    .home-filter {
        width: 20%;
        border-radius: 0;
        border: none;
    }
    #productGrid {
        width: 100vw;
    }
    .home-product {
        width: 25vw;
        height: 25vw;
    }
    .home-product.destacado {
        width: 50vw;
        height: 50vw;
    }
</style>
@endpush

@push('scripts')
<script>
  $('#homeFlickity').flickity({
    // options
    cellSelector: '.home-cell',
    cellAlign: 'center',
    contain: true,
    prevNextButtons: false,
    wrapAround: true,

  });

  var $grid = $('#productGrid').isotope({
    itemSelector: '.home-product',
    layoutMode: 'packery',
  });

  // bind filter button click
  $('.home-filters').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    $grid.isotope({ filter: filterValue });
  });

  // change is-checked class on buttons
  $('.home-filters').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });
</script>
@endpush