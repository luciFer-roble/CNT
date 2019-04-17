 @extends('layout.app')

@section('content')
 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                     <form method="POST" action="{{ route('internet_tariffs.update', $internet_tariff->id) }}" enctype="multipart/form-data">
                     <input name="_method" type="hidden" value="PUT">

                        {{ csrf_field() }}
                       <div class="card-body">
                            <div class="row margin">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Nombre:</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $internet_tariff->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-10 control-label" for="internet_plan_id">Plan Internet Fijo:</label>
                                        <div class="col-lg-12">
                                            <select id="internet_plan_id" name="internet_plan_id" class="form-control">
                                                @foreach($internet_plans as $internet_plan)
                                                    <option value="{{ $internet_plan->id }}"
                                                           @if($internet_tariffs->internet_plan_id==$internet_plan->id) 
                                                           selected
                                                           @endif
                                                    >{{ ($internet_plan->name)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Tipo:</label>
                                        <input type="text" class="form-control" id="type" name="type"  value="{{ $internet_tariff->type }}">
                                    </div>
                                     
                                    <div class="form-group">
                                        <label for="technology">Tecnolog&iacutea:</label>
                                        <input type="text" class="form-control" id="technology" name="technology"  value="{{ $internet_tariff->technology }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="iva">IVA:</label>
                                        <input type="text" class="form-control" id="iva" name="iva"  value="{{ $internet_tariff->iva }}">
                                    </div>                                                          

                                    <div class="form-group">
                                        <label for="ice">ICE:</label>
                                        <input type="text" class="form-control" id="ice" name="ice"
                                         value="{{ $internet_tariff->ice }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="cost">Costo:</label>
                                        <input type="text" class="form-control" id="cost" name="cost"
                                         value="{{ $internet_tariff->cost }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="download">Descarga:</label>
                                        <input type="text" class="form-control" id="download" name="download"  value="{{ $internet_tariff->download }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="upload">Carga:</label>
                                        <input type="text" class="form-control" id="upload" name="upload"
                                         value="{{ $internet_tariff->upload }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="instalation_cost">Costo Instalaci&oacuten:</label>
                                        <input type="text" class="form-control" id="instalation_cost" name="instalation_cost"  value="{{ $internet_tariff->instalation_cost }}">
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