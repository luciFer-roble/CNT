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
                                        <input type="button" onClick="location.href = 'movil-pospago/create'"
                                               class="btn btn-sm btn-outline-success" value="NUEVO PLAN POSPAGO">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="full-height" id="app">
                                <div class="container">
                                    <data-table
                                        fetch-url=" {{ route('getPlanesPospago') }} "
                                        dir="movil-pospago/"
                                            :columns=" [
                                                    {
                                                        label: 'Nombre',
                                                        field: 'name',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                
                                                    {
                                                        label: 'Descripcion',
                                                        field: 'description',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Imagen',
                                                        field: 'img',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Copy',
                                                        field: 'copy',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Beneficios',
                                                        field: 'benefits',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    
                                                     {
                                                        label: 'Condiciones',
                                                        field: 'conditions',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },                                                  
                                                    {
                                                        label: 'Condiciones PDF',
                                                        field: 'pdf_conditions',
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
                                    <span class="float-right">&Uacuteltima modificaci&oacuten: {{$last}} por {{$lastby}}</span>   @endif
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
@stop

