@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" id="app">
                    <form method="POST" action="{{ route('terminales.update', $terminal->id) }}" enctype="multipart/form-data">
                     <input name="_method" type="hidden" value="PUT">
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="row margin">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Nombre:</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $terminal->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="brand">Marca:</label>
                                        <input type="text" class="form-control" id="brand" name="brand" value="{{ $terminal-> brand}}">
                                    </div>
                                     <div>
                                        <label for="description">Descripcion:</label>
                                        <input type="text" class="form-control" id="description" name="description"
                                        value="{{ $terminal-> description}}">
                                    </div>

                                    <!-- <div class="form-group">
                                        <label for="img">Imagen:</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <img src="{{ URL::asset('/img/equipos/'.$terminal->img) }}"/>
                                                {{$terminal->img}}<br>
                                                <input type="file" name="img" />
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="img">Imagen:</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="" id="img" name="img">
                                                <label  for="img"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="home_img">Imagen de Home:</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="" id="home_img" name="home_img">
                                                <label  for="home_img"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="copy">Ir a Home:</label>
                                        <input type="radio"  id="ho_home" name="go_home" value="1" >True
                                        <input type="radio" id="ho_home" name="go_home" value="0" checked="checked">False
                                    </div> 
                                    <div class="form-group">
                                        <label for="copy">Copia:</label>
                                        <input type="text" class="form-control" id="copy" name="copy" value="{{ $terminal->copy }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="benefits">Beneficios:</label>
                                        <input type="text" class="form-control" id="benefits" name="benefits" value="{{ $terminal->benefits }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="state">Estado:</label>
                                        <input type="text" class="form-control" id="state" name="state" value="{{ $terminal->state }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="cash_price">Precio</label>
                                        <input type="text" class="form-control" id="cash_price" name="cash_price" value="{{ $terminal-> cash_price}}">
                                    </div>                                  

                                    <div class="form-group">
                                        <label for="from_price">Precio Desde</label>
                                        <input type="text" class="form-control" id="from_price" name="from_price" value="{{ $terminal-> from_price }}"> 
                                    </div>

                                    <div class="form-group">
                                        <label for="screen_size">Tamaño Pantalla</label>
                                        <input type="text" class="form-control" id="screen_size" name="screen_size" value="{{ $terminal-> screen_size}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="front_cam">Camara Frontal</label>
                                        <input type="text" class="form-control" id="front_cam" name="front_cam"
                                        value="{{ $terminal->front_cam }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="back_cam">Camara Trasera:</label>
                                        <input type="text" class="form-control" id="back_cam" name="back_cam"
                                        value="{{ $terminal-> back_cam}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="os ">Sistema Operativo</label>
                                        <input type="text" class="form-control" id="os" name="os"
                                        value="{{ $terminal-> os}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="memory">Memoria</label>
                                        <input type="text" class="form-control" id="memory" name="memory"
                                        value="{{ $terminal-> memory}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="extensible_memory">Memoria Extensible:</label>
                                        <input type="text" class="form-control" id="extensible_memory" name="extensible_memory"
                                        value="{{ $terminal-> extensible_memory}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="height">Alto:</label>
                                        <input type="text" class="form-control" id="height" name="height"
                                        value="{{ $terminal-> height}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="width">Ancho:</label>
                                        <input type="text" class="form-control" id="width" name="width"
                                        value="{{ $terminal->width }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="depth ">Grosor:</label>
                                        <input type="text" class="form-control" id="depth" name="depth"
                                        value="{{ $terminal-> depth}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="battery">Bateria</label>
                                        <input type="text" class="form-control" id="battery" name="battery"
                                        value="{{ $terminal-> battery}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="colors">Colores:</label>
                                        <input type="text" class="form-control" id="colors" name="colors"
                                        value="{{ $terminal-> colors}}">
                                    </div>                        
                            </div>
                        </div>
                                
                        </div>
                        <div class="card-footer">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@stop