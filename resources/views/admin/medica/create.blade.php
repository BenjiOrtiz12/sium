@extends('layouts.app')
@section('pestaña', 'Lista Medicamentos')

@section('titulo', 'Medicamentos')
@section('subtitulo','Detalles de Medicamentos')

@section('content')

	
	<form class="" id="" action="{{route('medica.store')}}"   method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="panel panel-default">
                <div class="panel-heading">Registro</div>

                <div class="panel-body">
             
                   <a href=""><label style="float:right;" class="btn btn-danger">Retroceder</label></a> 
                </div><br/>
                <div class="container-fluid">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre..." required="required">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                    <label for="diluyente">Diluyente</label>
                    <input type="int" name="diluyente" class="form-control" placeholder="Diluyente..." required="required">
                    </div>
                </div>
                <div class=" col-md-2">
                    <div class="form-group">
                    <label for="estabilidad">Estabilidad</label>
                    <input type="time" name="estabilidad" class="form-control" placeholder="Estabilidad..." required="required">
                    </div>
                </div>

                 <div class=" col-md-3">
                    <div class="form-group">
                    
                    
<a href="" data-target="#modal-delete-1" data-toggle="modal"><button class="button btn btn-toolba">Tiempo de administracion</button></a>

                    </div>
                </div>

                 <div class=" col-md-3">
                    <div class="form-group">
                    <label for="estabilidad">Tiempo de administracion</label>
                    <input type="number" name="estabilidad" class="form-control" placeholder="Estabilidad..." required="required">
                    </div>
                </div>
                 <div class=" col-md-2">
                    <div class="form-group">
                    <label for="estabilidad">Periodo</label>
                      <select name="genero"  class="form-control "  class="form-control"  data-live-search="true">

                          @foreach ($dias_horas as $g)
                          <option value="{{$g->id}}" >{{$g->tipo}}</option>
                          @endforeach
                        </select>
                    </div>
                </div>

                <div class=" col-md-12">
                    <div class="form-group">
                    <label for="recomendacion">Recomendacion</label>
                    
                    <input type="textarea" name="recomendacion" class="form-control" placeholder="Mantenga a temperatura ambiente..." required="required">
                    </div>
                </div>
                 <div class="col-md-12">
                    <div class="form-group">
                    <label for="utilidad">utilidad</label>
                    <input type="int" name="diluyente" class="form-control" placeholder="utilidad..." required="required">
                    </div>
                </div>
                
                </div>
                 
               
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>
                </div>
                    </div>
            </form>
          


         
    
    @include('admin.medica.modal')
</div>


@endsection