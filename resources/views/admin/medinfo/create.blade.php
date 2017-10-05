@extends('layouts.app')
@section('pestaña', 'Crear')

@section('titulo', 'Nuevo detalle Medicamento')
@section('subtitulo','detalles producto')
@section('content')

<form class="" id="" action=""  method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="panel panel-default">
                <div class="panel-heading">Registro</div>

                <div class="panel-body">
              
                    <label  style="float:right;" class="btn btn-danger">Retroceder</label>
                </div>
                <div class="container-fluid">
                
                <div class="col-xs-6 col-md-6">
                    <div class="form-group">
                        <label for="nombre">Seleccione Medicamento</label>
                        <input type="select" value="{{$medicamento}}" name="medicamentos_id" class="form-control">
                    </div>
                </div>

                <div class="col-xs-3 col-md-3">
                    <div class="form-group">
                        <label for="nombre">Lote</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre...">
                    </div>
                </div>
                <div class="col-xs-3 col-md-3">
                    <div class="form-group">
                    <label for="nombre">Fecha Caducidad</label>
                    <input type="date" name="nombre" class="form-control">
                    </div>
                </div>
                </div>
                    </div>
                     <button class="btn btn-primary" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
            </form>
                   
@endsection