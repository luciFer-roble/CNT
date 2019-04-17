@extends('layout.app')

@section('content')

        <div class="container-fluid">
            <!-- Breadcrumbs-->

            <div class="row">
                <div class="col-12">

                    <div class="card mb-3" id="app">
                        <div class="card-header">
                             <div  class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                                 <div class="btn-toolbar mb-2 mb-md-0">
                                    <div class="btn-group mr-2">
                                        <input type="button" onClick="location.href = 'internet_tariffs/create'"
                                               class="btn btn-sm btn-outline-success" value="NUEVA TARIFA INTERNET FIJO">
                                    </div>
                                </div>
                            </div>
                            </div>

                        <div class="card-body">
                            <div class="full-height" id="app">
                                <div class="container">
                                    <data-table
                                        fetch-url=" {{ route('getTarifasInternetFijo') }} "
                                        dir="internet_tariffs/"
                                            :columns=" [
                                                    {
                                                        label: 'Nombre',
                                                        field: 'name',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                
                                                    {
                                                        label: 'Plan Internet',
                                                        field: 'internet_plan_id',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Tipo',
                                                        field: 'type',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Tecnología',
                                                        field: 'technology',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'IVA',
                                                        field: 'iva',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                                                                       
                                                    {
                                                        label: 'ICE',
                                                        field: 'ice',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Costo',
                                                        field: 'cost',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Descarga',
                                                        field: 'download',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                                                                       
                                                    {
                                                        label: 'Carga',
                                                        field: 'upload',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Costo Instalación',
                                                        field: 'instalation_cost',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Acción',
                                                        field: 'action',
                                                        
                                                    },

                                                ]"
                                    ></data-table>
                                    @if(isset($last))
                                    <span class="float-right">&Uacuteltima modificaci&oacuten: {{$last}} </span>   @endif
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
@stop

