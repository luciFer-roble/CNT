 @extends('layout.app')

@section('content')
 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form method="POST" action="{{ route('promociones.update', $promocion->id) }}" enctype="multipart/form-data">
                     <input name="_method" type="hidden" value="PUT">

                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="row margin">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Nombre:</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                        value="{{$promocion->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Descripcion:</label>
                                        <input type="text" class="form-control" id="description" name="description"
                                         value="{{$promocion->description}}">
                                    </div>
                                     <div class="form-group">
                                        <label for="img">Imagen:</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="" id="img" name="img">
                                                <label class="" for="img"></label>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="copy">Copy:</label>
                                        <input type="text" class="form-control" id="copy" name="copy"
                                         value="{{$promocion->copy}}">
                                    </div>
                                     
                                    <div class="form-group">
                                        <label for="state">Estado:</label>
                                        <input type="text" class="form-control" id="state" name="state"
                                         value="{{$promocion->state}}">
                                    </div>
                                     <div class="form-group">
                                        <label for="note">Nota:</label>
                                        <input type="text" class="form-control" id="note" name="note"
                                         value="{{$promocion->note}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="tariff_sin_imp">Tarifa Sin Impuestos:</label>
                                        <input type="text" class="form-control" id="tariff_sin_imp" name="tariff_sin_imp"  value="{{$promocion->tariff_sin_imp}}">
                                    </div>                   

                                    <div class="form-group">
                                        <label for="tariff_con_imp">Tarifa Con Impuestos</label>
                                        <input type="text" class="form-control" id="tariff_con_imp" name="tariff_con_imp"  value="{{$promocion->tariff_con_imp}}">
                                    </div>    

                                    <div class="form-group">
                                        <label for="conditions">Condiciones:</label>
                                        <input type="text" class="form-control" id="conditions" name="conditions"
                                         value="{{$promocion->conditions}}">
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