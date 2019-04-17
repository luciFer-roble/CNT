@extends('layout.app')

@section('content')

        <div class="container-fluid">
            <!-- Breadcrumbs-->

            <div class="row">
                <div class="col-12">

                    <div class="card mb-3" >
                        <div class="card-header">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center  ">

                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group mr-2">
                                    <input type="button" onClick="location.href = 'terminales/create'"
                                           class="btn btn-sm btn-outline-success" value="NUEVO TERMINAL">
                                </div>
                        </div>
                    </div>

                        <div class="card-body">

                            <div class="full-height" id="app">
                                <div class="container">
                                    <data-table
                                        fetch-url=" {{ route('getTerminales') }} "
                                        dir="terminales/"
                                        :columns=" [
                                                    {
                                                        label: 'Nombre',
                                                        field: 'name',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Marca',
                                                        field: 'brand',
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
                                                        label: 'Imagen de Home',
                                                        field: 'home_img',
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
                                                        label: 'Estado',
                                                        field: 'state',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Colores',
                                                        field: 'colors',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Tamaño Pantalla',
                                                        field: 'screen_size',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Camara Frontal',
                                                        field: 'front_cam',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Camara Trasera',
                                                        field: 'back_cam',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Sistema Operativo',
                                                        field: 'os',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Memoria',
                                                        field: 'memory',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Memoria Extensible',
                                                        field: 'extensible_memory',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Alto',
                                                        field: 'height',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Ancho',
                                                        field: 'width',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Grosor',
                                                        field: 'depth',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Bateria',
                                                        field: 'battery',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Precio',
                                                        field: 'cash_price',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Precio Desde',
                                                        field: 'from_price',
                                                        filterOptions: {
                                                            enabled: true,
                                                        },
                                                    },
                                                    {
                                                        label: 'Actualizado por',
                                                        field: 'updated_by',
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
                                    <span class="float-right">&Uacuteltima modificaci&oacuten por {{$lastby}} {{$last}}</span>

                                    @endif
                                </div>

                            </div>

                            
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
@stop

