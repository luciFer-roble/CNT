@extends('layout.app')

@section('content')

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6">

                    <div class="card card-info">
                        <div class="card-header">
                            <h2>{{ $internet_plans->name }}</h2>
                        </div>
                        <form role="form">

                                <div class="card-body">
                                    <p>
                                        <strong>Nombre:</strong> {{ $internet_plans->name }}<br>
                                        <strong>Copy:</strong> {{ $internet_plans->copy }}<br>
                                        <strong>Beneficios:</strong> {{ $internet_plans->benefits }}<br>
                                        <strong>Condicion:</strong> {{ $internet_plans->conditions }}<br>
                                    </p>
                                </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>


@stop