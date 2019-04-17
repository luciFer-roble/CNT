@extends('layout.app')

@push('css')
<style type="text/css">


    .cell-Main {
        width: 100%;
        margin: 0;
    }
    .box-copy h2 {
        font-size: 40px;
        color: #fff;
    }
    .precio-final {
        font-size: 100px
    }
    .precio-sin-impuestos {
        font-size: 20px;
    }
    .seleccionadores {
        background: #059FC5;
        margin: 0;
    }
    /*.box-copy {*/
        /*display: inline-block;*/
        /*padding: 0.5em 1.0em;*/
        /*background-color: #059FC5;*/
        /*border: none;*/
        /*color: #fff;*/
        /*font-size: 1.5em !important;*/
        /*height: 25vh;*/
    /*}*/
    .copy-plan {
        margin-top: 30px;
        margin-bottom: 30px;
        height: 500px;
    }
    .incluye-planes-pospago-border {
        border-top: 0.7em solid #059FC5;
        height: 30vh;
    }
    .beneficios-border {
        padding-left: 0px;
    }
    .incluye-border {
        border-right: 1px solid #999999;
        padding-right: 0px;
    }
    .condiciones-box {
        background-color: #059FC5;
        color: #fff;
        text-align: justify;
        height: 25vh;
    }
    /*.beneficios-box h2 {*/
        /*border-bottom: 1px solid #999999;*/
        /*padding: 0.5em;*/
        /*color: #059FC5;*/
    /*}*/
    .condiciones-box h3 {
        color: #fff;
        padding-bottom: 5px;
        padding-top: 10px;
    }
    .condiciones-box span {
        font-size: 12px;
    }
    .loquiero-01 {
        font-family: "UniSansRegular-Bold", sans-serif;
        background-color: #fff;
        color: #059FC5;
        size: 16px;
        border-radius: 10px;
        letter-spacing: 2px;
        font-weight: 500;
    }
    .loquiero-01:hover {
        background-color: #F37B20;
        color: #fff;

    }
    @media (max-width: 768px) {
        .selector-plan {
            font-size: small;
        }
        /*.cell-secondary {*/
            /*height: 5vh;*/
            /*font-size: 1.5em;*/
        /*}*/
        .copy-plan{
            height: 500px;
        }
        /*.box-copy{*/
            /*height: 40vh;*/
        /*}*/
    }
</style>
@endpush


@section('content')
    <b-container fluid class="px-0">
        <div class="container-fluid text-center" style="background-color: #dfe0e4;">
            <b-row class="py-3 text-center">
                <b-col>
                    <h1 class="mb-0 text-blue"><strong>Planes Móvil Pospago</strong></h1>
                </b-col>
            </b-row>
        </div>
        <!--Planes-->
        <div id="carSelect"><!--Carrousel Secondary-->
            @foreach($mobile_plans as $plan)
                <div class="cell-secondary text-blue d-flex align-items-center justify-content-center">{{$plan->name}}</div>
            @endforeach
            {{--<div class="cell-secondary">Plan 2</div>--}}
            {{--<div class="cell-secondary">Plan 3</div>--}}
        </div><!--end Carrousel Secondary-->

        <!-- Carrouserl Main-->
        <div id="carMain" class="">
            @foreach($mobile_plans as $plan)
                <div class="cell-Main"><!--Cel-Main-01-->
                    <div class="container-fluid bg-blue text-white box-copy">
                        <div class="container py-4 px-4">
                            <button class="arrow-left btn btn-link p-0 border-0">
                            <img src="/img/arrow-carrousels.svg" alt="">
                            </button>
                            <button class="arrow-right btn btn-link p-0 border-0">
                                <img src="/img/arrow-carrousels.svg" alt="">
                            </button>
                            <div class="row">
                                <div class="col-lg-8 py-3 px-2 mx-1">
                                    <h2 class="nombre-del-plan">{{$plan->name}}</h2>
                                    <p>{{$plan->copy}}</p>
                                    {{--<mobile-prices-select :plans="{{$plan->plans}}"></mobile-prices-select>--}}
                                    {{--<span class="precio-final">{{$plan->price_taxed}}</span>--}}
                                    {{--<div class="precio-sin-impuestos">* Precio sin impuestos {{$plan->price}} (12% VA)</div>--}}
                                </div>
                                <div class="col-lg-4 py-1 px-auto">
                                    <lead-modal color="#0095DB"></lead-modal>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container copy-plan">
                        <b-table
                                responsive
                                thead-class="bg-primary text-white"
                                striped
                               :fields="[
                                                {
                                                  key: 'cost',
                                                    label: 'Precio*',
                                                    formatter: value => {
                                                        return (value * 1.12).toFixed(2)
                                                    }
                                                },
                                                {
                                                  key: 'gigs',
                                                    label: 'Gigas'
                                                },
                                                {
                                                  key: 'whatsapp',
                                                    label: 'Whatsapp'
                                                },
                                                {
                                                  key: 'facebook',
                                                    label: 'Facebook'
                                                },
                                                  {
                                                      key: 'instagram',
                                                    label: 'Instagram'
                                                  },
                                                  {
                                                      key: 'twitter',
                                                    label: 'Twitter'
                                                  },
                                                  {
                                                      key: 'deezer',
                                                    label: 'Deezer'
                                                  },
                                                  {
                                                      key: 'free_minutes',
                                                    label: 'Minutos gratuitos otras operadoras'
                                                  }
                                                ]"
                                :items="{{$plan->prices}}"
                        ></b-table>
                    </div>

                    <div class="container-fluid incluye-planes-pospago-border bg-blue text-white">
                        <div class="container beneficios-box py-4 px-2">
                            <div class="row">
                                <div class="col">
                      <span>
                         <h2 class="text-center">{{$plan->name}} Incluye</h2>
                        </span>
                                    <p>{{$plan->benefits}}</p>
                            {{--        <ul>
                                        <li>2GB de navegacion</li>
                                        <li>50 minutos a fijo y movil CNT, Whatasapp libre*</li>
                                        <li>Vigencia 30 dias *Hasta 1024mb</li>
                                    </ul>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Conditions -->
                    <div class="container-fluid condiciones-box py-4 px-2">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h6><strong>Condiciones:</strong></h6>
                                    <div class="conditions-block">
                                        {{$plan->conditions}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!--end Conditions-01-->
                </div><!--end Cel-Main-01-->
            @endforeach
        </div>

    </b-container>
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
    hash: true
  });

  $('#carSelect').on('change.flickity', function (event, index) {
    $('#carMain').flickity('select', index);
  });

  $('#carMain').on('change.flickity', function (event, index) {
    $('#carSelect').flickity('select', index);
  });

  $('.arrow-left').on('click', function (event) {
    $('#carMain').flickity('previous', true );
    $('#carSelect').flickity('select', $('#carMain').data('flickity').selectedIndex);
  })

  $('.arrow-right').on('click', function (event) {
    $('#carMain').flickity('next', true );
    $('#carSelect').flickity('select', $('#carMain').data('flickity').selectedIndex);
  })
</script>
@endpush