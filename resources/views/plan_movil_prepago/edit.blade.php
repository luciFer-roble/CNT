 @extends('layout.app')

@section('content')
 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form method="POST" action="{{ route('movil-prepago.update', $mobile_plan->id) }}" enctype="multipart/form-data">
                     <input name="_method" type="hidden" value="PUT">
                    
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="row margin">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Nombre:</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $mobile_plan->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Descripcion:</label>
                                        <input type="text" class="form-control" id="description" name="description"
                                        value="{{ $mobile_plan->description }}">
                                    </div>
                                     <div class="form-group">
                                        <label for="img">Imagen:</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="" id="img" name="img">
                                                <label class="" for="img">{{$mobile_plan->img}}</label>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="copy">Copy:</label>
                                        <input type="text" class="form-control" id="copy" name="copy"
                                        value="{{ $mobile_plan->copy }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="benefits">Beneficios:</label>
                                        <input type="text" class="form-control" id="benefits" name="benefits"
                                        value="{{ $mobile_plan->benefits }}">
                                    </div>  
                                    <div class="form-group">
                                        <label for="price">Precio:</label>
                                        <input type="text" class="form-control" id="price" name="price"
                                        value="{{ $mobile_plan->price }}">
                                    </div>
                                     <div class="form-group">
                                        <label for="iva">Iva:</label>
                                        <input type="text" class="form-control" id="iva" name="iva"
                                        value="{{ $mobile_plan->iva }}">
                                    </div> 
                                     <div class="form-group">
                                        <label for="ice">Ice:</label>
                                        <input type="text" class="form-control" id="ice" name="ice"
                                        value="{{ $mobile_plan->ice }}">
                                    </div>                                           
                                    <div class="form-group">
                                        <label for="conditions">Condicion:</label>
                                        <input type="text" class="form-control" id="conditions" name="conditions" value="{{ $mobile_plan->conditions}}">
                                    </div>
                                     <div class="form-group">
                                        <label for="pdf_conditions">Condiciones PDF:</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="" id="pdf_conditions" name="pdf_conditions">
                                                <label class="" for="pdf_conditions">{{$mobile_plan->pdf_conditions}}</label>
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