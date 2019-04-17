 @extends('layout.app')

@section('content')
 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                     <form method="POST" action="{{ route('internet_plans.update', $internet_plan->id) }}" enctype="multipart/form-data">
                     <input name="_method" type="hidden" value="PUT">
                    {{ csrf_field() }}
                       <div class="card-body">
                            <div class="row margin">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Nombre:</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $internet_plan->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Descripcion:</label>
                                        <input type="text" class="form-control" id="description" name="description"
                                        value="{{ $internet_plan->description }}">
                                    </div>
                                     <div class="form-group">
                                        <label for="img">Imagen:</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="" id="img" name="img">
                                                <label class="" for="img" value="{{ $internet_plan->img }}"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="copy">Copy:</label>
                                        <input type="text" class="form-control" id="copy" name="copy" value="{{ $internet_plan->copy }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="benefits">Beneficios:</label>
                                        <input type="text" class="form-control" id="benefits" name="benefits" value="{{ $internet_plan->benefits }}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="conditions">Condicion:</label>
                                        <input type="text" class="form-control" id="conditions" name="conditions" value="{{ $internet_plan->conditions}}">
                                    </div>
                                     <div class="form-group">
                                            <label for="pdf_conditions">Condiciones PDF:</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="" id="pdf_conditions" name="pdf_conditions">
                                                    <label class="" for="pdf_conditions" value="{{ $internet_plan->pdf_conditions }}"></label>
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