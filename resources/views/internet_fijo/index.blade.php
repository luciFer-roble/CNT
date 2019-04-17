@extends('layout.app')

@section('content')
<div style="background-color:aliceblue;color: #009fc6;">
    <div class="container text-center">
        <br>
        <img src="{{ asset('images/SVG/plan_fijo.svg')}}" height="50" class="inline-block" style="margin: auto;    margin-top: -20px;">
        <h2 class="inline-block" style="font-size:2.3rem;">Plan Fijo</h2>
        <br>
        <br>
    </div>
</div>

<section id="home-slide">
    <div class="principal" data-flickity>
        <div class="carousel-cell">
            <img src="{{ asset('img/s3.png')}}" class="img-fluid" alt='texto alternativo' />
        </div>
        <div class="carousel-cell">
            <img src="{{ asset('img/s3.png')}}" class="img-fluid" alt='texto alternativo' />
        </div>
        <div class="carousel-cell">
            <img src="{{ asset('img/s3.png')}}" class="img-fluid" alt='texto alternativo' />
        </div>
        <div class="carousel-cell">
            <img src="{{ asset('img/s3.png')}}" class="img-fluid" alt='texto alternativo' />
        </div>
    </div>
</section>
<br>
<br>
 <div class="container" style="color:#a0a0a0">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    <br> <br>
</div>

<section>
    <div class="principal" data-flickity>
        <div class="carousel-cell">
            <img src="{{ asset('img/planes-fijo.jpg')}}" class="img-fluid" alt='texto alternativo' />
        </div>
        <div class="carousel-cell">
            <img src="{{ asset('img/planes-fijo.jpg')}}" class="img-fluid" alt='texto alternativo' />
        </div>
        <div class="carousel-cell">
            <img src="{{ asset('img/planes-fijo.jpg')}}" class="img-fluid" alt='texto alternativo' />
        </div>
        <div class="carousel-cell">
            <img src="{{ asset('img/planes-fijo.jpg')}}" class="img-fluid" alt='texto alternativo' />
        </div>
        <div class="carousel-cell">
            <img src="{{ asset('img/planes-fijo.jpg')}}" class="img-fluid" alt='texto alternativo' />
        </div>
        <div class="carousel-cell">
            <img src="{{ asset('img/planes-fijo.jpg')}}" class="img-fluid" alt='texto alternativo' />
        </div>
    </div>
</section>



<div class="row" style="color:#a0a0a0">
        <div class="col-sm-12"><h3 class="text-semibold text-center text-verde">Beneficios:</h3></div>
    </div>
    <div class="row" style="color:#a0a0a0">
        <div class="col-sm-12">
            
            
            <div class="contenido" style="margin-left: 25%">
            <div class="row">
                <div class="col-sm-12">
                <p class="text-gris"><img src="{{ asset('img/item-pin.png')}}">&nbsp;&nbsp;Habla con la comunidad más grande del país</p>
                    <p class="text-gris"><img src="{{ asset('img/item-pin.png')}}">&nbsp;&nbsp;Tarifa única</p>
                <p class="text-gris"><img src="{{ asset('img/item-pin.png')}}">&nbsp;&nbsp;Llamadas ilimitadas a fijos y móviles del país</p>
                <p class="text-gris"><img src="{{ asset('img/item-pin.png')}}">&nbsp;&nbsp;Todas las líneas nuevas de telefonía fija obtienen sin ningún costo los siguientes beneficios adicionales:</p>
                <p class="text-gris"><img src="{{ asset('img/item-pin.png')}}">&nbsp;&nbsp;Llamada en Espera, Sin Restricción a ningún tipo de llamadas.</p>
                <p class="text-gris"><img src="{{ asset('img/item-pin.png')}}">&nbsp;&nbsp;Adultos Mayores obtienen el 50% de descuento en la pensión básica de la línea principal.</p>
                <p class="text-gris"><img src="{{ asset('img/item-pin.png')}}">&nbsp;&nbsp;Aplica para descuento por empaquetado el 10% o 15% en la pensión básica mensual, acorde a las políticas de empaquetamiento vigentes.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
 </div>


@endsection

@push('css')
<style media="screen">
.principal {
  background: white;
}

.carousel-cell {
  width: 100%;
  
  margin-right: 10px;

}



/* position dots in gallery */
.flickity-page-dots {
  bottom: 0px;
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
</style>
@endpush

    
@push('scripts')

<script type="text/javascript">
</script>
@endpush
