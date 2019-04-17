@extends('layout.app')

@section('content')

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6">

                    <div class="card card-info">
                        <div class="card-header">
                            <h2>{{ $terminal->name }}</h2>
                        </div>
                        <form role="form">

                                <div class="card-body">
                                    <p>
                                        <strong>Nombre:</strong> {{ $terminal->name }}<br>
                                        <strong>Marca:</strong> {{ $terminal->copy }}<br>
                                        <strong>Copy:</strong> {{ $terminal->copy }}<br>
                                        <strong>State:</strong> {{ $terminal->benefits }}<br>
                                        <strong>Precio:</strong> {{ $terminal->conditions }}<br>
                                        <strong>Cuota:</strong> {{ $terminal->conditions }}<br>
                                        <strong>Tamaño Pantlla:</strong> {{ $terminal->copy }}<br>
                                        <strong>Camara Frontal:</strong> {{ $terminal->copy }}<br>
                                        <strong>Camara Trasera:</strong> {{ $terminal->benefits }}<br>
                                        <strong>Precio:</strong> {{ $terminal->conditions }}<br>
                                        <strong>Cuota:</strong> {{ $terminal->conditions }}<br>
                                    </p>
                                </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>


@stop