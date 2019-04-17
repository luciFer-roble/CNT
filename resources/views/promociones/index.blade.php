@extends('layout.app')

@push('css')
<style type="text/css">
    .titulo-promociones {
        background-color: #333333;
        color: #fff;
        font-size: 50px;
        padding: 15px;
    }

    .promociones-box {
        background-color: #FF8000;
        color: #FFF;
        padding-left: 0px;
        padding-right: 0px;
    }

    .copy-promociones {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .copy-promociones h2 {
        font-size: 3.2em;
        font-weight: 300;
        letter-spacing: 3px;
    }

    .copy-text-box {
        font-size: 1.5em;
        color: #fff;
    }

    .loquiero-colo1-1 {
        border: 0px;
        size: 16px;
        color: #fff;
        background-color: #059FC5;
    }

    .condiciones-promociones {
        background-color: #333333;
        color: #fff;
        text-align: justify;
        padding-left: 0px;
        padding-right: 0px;
    }

    .text-condicition {
        font-size: 0.8em;
        padding: 25px;
        border-bottom: 2px white solid;
    }

    .condiciones-promociones h3 {
        color: #fff;
        padding-bottom: 5px;
        padding-top: 10px;
        font-size: 0.9em;
        font-weight: bold;
    }

    .loquiero-promos {
        background-color: #fff;
        color: #FF8000;
        size: 16px;
        border-radius: 10px;
        letter-spacing: 2px;
        font-weight: 500;
        margin: 100px;
    }

    .loquiero-promos:hover {
        background-color: #333333;
        color: #FF8000;
    }

    .promo-img {
        height: 60vh;
        width: 100%;
        background: url({{asset('img/promos/promo-01.jpg')}}) 56%;
        background-size: cover;
    }
    @media (min-width: 768px) {
        .promo-img {
            height: 80vh;
            width: 100%;
            background: url({{asset('img/promos/promo-01.jpg')}}) center;
            background-size: cover;
        }
    }

</style>
@endpush

@section('content')
    <div class="container-fluid text-center titulo-promociones">
        <h1 class="icon-pospago">Promociones de locura</h1>
    </div>
    <!--Inicio Promociones-->
    <div class="container-fluid promociones-box">
        <div class="promo-img">

        </div>

        <div class="container-fluid copy-promociones">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="titulo-promocion">Redes sociales libres con tus recargas</h2>
                        <div class="copy-text-box">Los megas recibidos como bonificación a la recarga, pueden utilizarse
                            para navegar un día en redes sociales
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn loquiero-promos btn-lg">Me interesa</button>
                    </div>
                </div>
            </div>
            <!--Condiciones -->

        </div>
        <div class="container-fluid condiciones-promociones">
            <div class="container text-condicition">
                <h3>Condiciones</h3>
                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                    dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                    facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
                    delenit augue duis dolore te feugait nulla facilisi</p>

            </div>
        </div>
    </div>
@endsection

