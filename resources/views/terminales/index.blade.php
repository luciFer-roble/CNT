@extends('layout.app')

@push('css')
<style>
    .equipos-img {

    }
</style>
@endpush


@section('content')
    <b-container fluid class="px-0">
        <b-container fluid style="background-color: #dfe0e4;">
            <b-row class="py-3 text-center text-blue">
                <b-col>
                    <h1 class="mb-0 text-orange"><strong>Terminales</strong></h1>
                </b-col>
            </b-row>
        </b-container>
    <!--Planes-->
    <div id="carSelect"><!--Carrousel Secondary-->
        @foreach($equipos as $equipo)
            <div class="cell-secondary text-orange d-flex align-items-center justify-content-center"><div class="">{{$equipo->name}}</div></div>
        @endforeach
    </div><!--end Carrousel Secondary-->
    <!-- Carrouserl Main-->
    <div id="carMain" class="">
        @foreach($equipos as $equipo)
            <div class="cell-Main"><!--Cel-Main-01-->
                <div class="container-fluid box-copy bg-orange">
                    <b-container class="py-4 px-5">
                        <button class="arrow-left btn btn-link p-0 border-0">
                            <img src="/img/arrow-carrousels.svg" alt="">
                        </button>
                        <button class="arrow-right btn btn-link p-0 border-0">
                            <img src="/img/arrow-carrousels.svg" alt="">
                        </button>
                        <b-row>
                            <b-col>
                                <img src="{{asset('img/equipos/' . $equipo->img)}}" alt="" class="equipos-img img-fluid">
                            </b-col>
                        </b-row>
                    </b-container>
                </div>
                <div class="container">
                    <terminal-body :equipo="{{$equipo}}"></terminal-body>
                </div>
                <div class="container-fluid incluye-planes-pospago-border">
                    <div class="container beneficios-box">
                        <div class="row">
                            <div class="col-6 incluye-border text-center">
                  <span>
                     <h2 class="text-center">Plan Conectados Incluye</h2>
                     </span>
                                <ul>
                                    <li>2GB de navegacion</li>
                                    <li>50 minutos a fijo y movil CNT, Whatasapp libre*</li>
                                    <li>Vigencia 30 dias *Hasta 1024mb</li>
                                </ul>
                            </div>
                            <div class="col-6 beneficios-border text-center">
                                <h2 class="text-center">Beneficios</h2>
                                <ul>
                                    <li>$0,10* a Ecuador, EEUU, Canadá, Colombia, Perú y Venezuela.</li>
                                    <li>PLAN TODOS CONECTADOS:
                                        Plan tipo Prepago. Disponible para equipos aportados y
                                        equipos propios.
                                    </li>
                                    <li>Vigencia 30 dias *Hasta 1024mb</li>
                                    <li>Acceso a contratar servicios adicionales. (datos, SMS). También
                                        tiene la opción de contratar el PAQUETE CONECTADOS.
                                    </li>
                                    <li>Acceso a recargas físicas o electrónicas. Rollover de recargas,
                                        es decir el valor de las recargas es acumulable.
                                    </li>
                                    <li>Disponible para clientes que deseen aplicar a portabilidad
                                        numérica en CNT EP y/o nuevas activaciones.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Conditions -->
                <div class="container-fluid condiciones-color1">
                    <div class="container">
                        <h3>Condiciones</h3>
                        <div class="row">
                            <div class="col-8">
                        <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                            lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                            molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                            blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        </span>
                            </div>
                            <div class="col-4 text-center">
                                <button type="button" class="btn loquiero-cond btn-lg">lo quiero</button>
                            </div>
                        </div>
                    </div>
                </div><!--end Conditions-01-->
            </div><!--end Cel-Main-01-->
        @endforeach
    </div>
@endsection

@push("scripts")
<script type="text/javascript">

  $('#carSelect').flickity({
    cellSelector: '.cell-secondary',
    wrapAround: true,
    cellAlign: 'center',
    prevNextButtons: false,
    pageDots: false,
    hash: true
  });

  $('#carMain').flickity({
    cellSelector: '.cell-Main',
    wrapAround: true,
    cellAlign: 'center',
    prevNextButtons: false,
    pageDots: false,
    hash: true,
    dragThreshold: 30
  });

  $('#carSelect').on('change.flickity', function (event, index) {
    $('#carMain').flickity('select', index);
  });

  $('.arrow-left').on('click', function (event) {
    $('#carMain').flickity('previous', true );
    $('#carSelect').flickity('select', $('#carMain').data('flickity').selectedIndex);
  })

  $('.arrow-right').on('click', function (event) {
    $('#carMain').flickity('next', true );
    $('#carSelect').flickity('select', $('#carMain').data('flickity').selectedIndex);
  })


  $('#carMain').on('change.flickity', function (event, index) {
    $('#carSelect').flickity('select', index);
  });
</script>
@endpush