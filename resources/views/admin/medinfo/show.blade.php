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
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre..." value="{{ $medi[0]->nombre }}">
                    </div>
                </div>
        
                <div class=" col-md-2">
                    <div class="form-group">
                    <label for="estabilidad">Estabilidad</label>
                    <input type="time" name="estabilidad" class="form-control" placeholder="Estabilidad..." required="required">
                    </div>
                </div>
                 <div class=" col-md-2">
                    <div class="form-group">
                    <label for="diluyente">Diluyente</label>
                    <input type="time" name="diluyente" class="form-control" placeholder="Diluyente..." required="required">
                    </div>
                </div>
                
                 <div class=" col-md-2">
                    <div class="form-group">
                    <label for="lote">Lote</label>
                    <input type="text" name="lote" class="form-control" placeholder="Lote..." required="required">
                    </div>
                </div>
                
                <div class=" col-md-2">
                    <div class="form-group">
                    <label for="concentracion">Concentracion</label>
                    <input type="text" name="concentracion" class="form-control" placeholder="Concentracion..." required="required">
                    </div>
                </div>
                <div class=" col-md-2">
                    <div class="form-group">
                    <label for="docis">Docis</label>
                    <input type="docis" name="docis" class="form-control" placeholder="Docis..." required="required">
                    </div>
                </div>
                 <div class=" col-md-2">
                    <div class="form-group">
                    <label for="fecha">Fecha de Caducidad</label>
                    <input type="date" name="fecha" class="form-control" placeholder="Fecha..." required="required">
                    </div>
                </div>
                 <div class=" col-md-4">
                    <div class="form-group">
                    <label for="tiempo_administracion">Tiempo de administracion</label>
                    <input type="number" name="tiempo_administracion" class="form-control" placeholder="Tiempo administracion..." required="required">
                    </div>
                </div>

                 <div class=" col-md-2">
                    <div class="form-group">
                    <label for="total">Total</label>
                    <input type="number" name="total" class="form-control" placeholder="Total..." required="required">
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


@endsection