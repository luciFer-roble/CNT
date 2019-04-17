 @extends('layout.app')

@section('content')
 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form method="POST" action="{{ route('movil-prepago.store') }}" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="row margin">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Nombre:</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Descripcion:</label>
                                        <input type="text" class="form-control" id="description" name="description">
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
                                        <input type="text" class="form-control" id="copy" name="copy">
                                    </div>
                                    <div class="form-group">
                                        <label for="benefits">Beneficios:</label>
                                        <input type="text" class="form-control" id="benefits" name="benefits">
                                    </div>  
                                    <div class="form-group">
                                        <label for="price">Precio:</label>
                                        <input type="text" class="form-control" id="price" name="price">
                                    </div>
                                     <div class="form-group">
                                        <label for="iva">IVA:</label>
                                        <input type="text" class="form-control" id="iva" name="iva">
                                    </div>
                                    <div class="form-group">
                                        <label for="ice">ICE:</label>
                                        <input type="text" class="form-control" id="ice" name="ice">
                                    </div>                  
                                    <div class="form-group">
                                        <label for="conditions">Condiciones:</label>
                                        <input type="text" class="form-control" id="conditions" name="conditions">
                                    </div>
                                     <div class="form-group">
                                        <label for="pdf_conditions">Condiciones PDF:</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="" id="pdf_conditions" name="pdf_conditions">
                                                <label class="" for="pdf_conditions"></label>
                                            </div>
                                        </div>
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