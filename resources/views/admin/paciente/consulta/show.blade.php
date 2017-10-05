@extends('layouts.app')
@section('pestaña', 'Lista Pacientes')

@section('titulo', 'Paciente: ')
@section('subtitulo','Atencion a Paciente')


@section('etiqueta')
    <a href="{{url('admin/paciente/create')}}" class="dropdown-toggle">
          <p class="hidden-lg hidden-md">Dashboard</p>
        </a>

@endsection

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
 <form class="" id="" action="{{route('consulta.store')}}"  method="post" enctype="multipart/form-data">
                       {{csrf_field()}}
                    <div class="panel panel-default">
                <div class="panel-heading">Atencion a Pacientes</div>
                <div class="panel-body">
                 <a href="{{url('admin/paciente/'.$paciente['paciente']->id)}}">   <label   style="float:right;" onclick="retroceder()" class="btn btn-danger">Volver al menu</label></a>
                </div>
                <div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="{{($paciente['paciente']->nombre)}}" placeholder="{{($paciente['paciente']->nombre)}}">
                        <input type="text" name="paciente" class="form-control hidden" value="{{($paciente['paciente']->id)}}" placeholder="{{($paciente['paciente']->id)}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="int" class="form-control" value="{{($paciente['edad'])}} años" name="edad" class="form-control" placeholder="Año...">
                    </div>
                </div>
                  <div class="col-md-4">
                    <div class="form-group">
                    <label for="talla">Talla</label>
                    <input type="int" class="form-control"  name="talla" class="form-control" placeholder="Talla...">
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="form-group">
                    <label for="peso">Peso en Kg.</label>
                    <input type="int" class="form-control" name="peso" class="form-control" placeholder="Peso...">
                     </div>
                </div>
                  <div class="col-md-4">
                    <div class="form-group">
                    <label for="camilla">Camilla</label>
                    <input type="int" class="form-control" name="camilla" class="form-control" placeholder="Camilla...">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                    <label for="sintomas">Sintomas</label>
                    <input type="text" class="form-control" name="sintomas" class="form-control" placeholder="Sintomas...">
                    </div>
                </div>
               
              
                 <div class="col-md-12">
                    <div class="form-group">
                    <label for="alergias">Alergias</label>
                    <input type="text" name="alergias" value="{{($paciente['paciente']->alergias)}}" class="form-control" placeholder="Alergias...">
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

</div>