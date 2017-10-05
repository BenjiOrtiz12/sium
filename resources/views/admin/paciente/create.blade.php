@extends('layouts.app')
@section('pestaña', 'Crear')

@section('titulo', 'Crear Nuevo Paciente')
@section('subtitulo','Recuerda que todos los campos son necesarios')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      @if (count($errors)>0)
      <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach<!--Bluque para errores-->

        </ul>
      </div>
      @endif
    </div>
 <form class="" id="" action="{{route('paciente.store')}}"  method="post" enctype="multipart/form-data">
                       {{csrf_field()}}
                    <div class="panel panel-default">
                <div class="panel-heading">Registro de Pacientes</div>

                <div class="panel-body">
              
                 <a href="{{url('home')}}">   <label   style="float:right;" onclick="retroceder()" class="btn btn-danger">Volver al menu</label></a>
                </div>
                <div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" class="form-control" name="domicilio" class="form-control" placeholder="Domicilio...">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="numero_afiliacion">Numero de afiliación</label>
                        <input type="number" name="numero_afiliacion" class="form-control" placeholder="Numero de afiliación...">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="edad">Año de Nacimiento</label>
                    <input type="date" class="form-control" name="edad" class="form-control" placeholder="Año...">
                    </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label for="genero">Genero</label>
                  <select name="genero"  class="form-control "  class="form-control"  data-live-search="true">

                          @foreach ($genero as $g)
                          <option value="{{$g->id}}" >{{$g->genero}}</option>
                          @endforeach
                        </select>
                </div>
              </div>
              
                 <div class="col-md-12">
                    <div class="form-group">
                    <label for="alergias">Alergias</label>
                    <input type="text" name="alergias" class="form-control" placeholder="Alergias...">
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