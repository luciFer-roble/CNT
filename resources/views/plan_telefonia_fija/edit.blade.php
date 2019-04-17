 @extends('layout.app')

@section('content')
 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{Form::open( ['method'=>"PUT", 'url'=>array("/planes-telefonia-fija", $telefonia_fija_plans->id)]) }}

                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="row margin">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Nombre:</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $telefonia_fija_plans->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Descripcion:</label>
                                        <input type="text" class="form-control" id="description" name="description"
                                        value="{{ $telefonia_fija_plans->description }}">
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
                                        <input type="text" class="form-control" id="copy" name="copy" value="{{ $telefonia_fija_plans->copy }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="benefits">Beneficios:</label>
                                        <input type="text" class="form-control" id="benefits" name="benefits" value="{{ $telefonia_fija_plans->benefits }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="note">Notas:</label>
                                        <input type="text" class="form-control" id="note" name="note" value="{{ $telefonia_fija_plans->note }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="state">Estado:</label>
                                        <input type="text" class="form-control" id="state" name="state"
                                        value="{{ $telefonia_fija_plans->state }}">
                                    </div>  
                                    <div class="form-group">
                                        <label for="type">Tipo:</label>
                                        <input type="text" class="form-control" id="type" name="type"
                                        value="{{ $telefonia_fija_plans->type }}">
                                    </div>  

                                    <div class="form-group">
                                        <label for="conditions">Condicion:</label>
                                        <input type="text" class="form-control" id="conditions" name="conditions" value="{{ $telefonia_fija_plans->conditions}}">
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