@extends('layouts.app')
@section('pestaña', 'Lista Pacientes')

@section('titulo', 'Medicamento: ')
@section('subtitulo','Detalles, del Medicamento')



@section('etiqueta')

    <a href="{{url('admin/medinfo/'.$medi[0]->id)}}" class="dropdown-toggle">
          <i class="fa pe-7s-id"></i> Agregar Medicamento
         
        </a>
              
@endsection



@section('content')

  <div class="panel panel-default ">
   {{-- <a href="{{url('admin/paciente')}}">   <label   style="float:right;" onclick="retroceder()" class="btn btn-danger">Volver al menu</label></a> --}}
   {{-- <label> Nombre del Paciente:<strong> {{($paciente['paciente']->nombre)}}</strong></label> --}}
   {{-- <label style="float:right;" class="btn btn-default">tiene: {{$paciente['edad']}} años</label> --}}
 {{-- <a href="{{url('admin/paciente/consulta/'.$paciente['paciente']->id)}}"> <label style="float:right;" class="btn btn-warning">Atender</label></a> --}}
  {{-- <p>Alergias:{{$paciente['paciente']->alergias}}</p> --}}
    <hr>
    <label>Historial</label>
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
                <th>ID</th>
                <th>Lote</th>
                <th>diluyente</th>
                {{-- <th>Edad</th> --}}
                {{-- <th>Peso</th> --}}
                <th>Recomendacion</th>
              {{-- <th>Talla</th> --}}
              {{-- <th>Camilla</th> --}}
                <th>Fecha de caducidad</th>
            </thead>
            <tbody>
             @foreach($medi as $m)
                <tr>
                <td>{{$m->id}}</td>
                  <td>{{$m->lote}}</td>
                  <td>{{$m->diluyente}}</td>
                    <td>{{$m->recomendacion}}</td>
                    <td>{{$m->fechaCaducidad}}</td> 
                  {{-- <td>{{$pas->peso}}</td> --}}
                  {{-- <td>{{$pas->genero}}</td> --}}
                  {{-- <td>{{$pas->talla}}</td> --}}
                  {{-- <td>{{$pas->cama}}</td> --}}
                    {{-- <td> --}}
                    {{-- <a href="{{url('admin/paciente/'.$pas->id)}}" data-target="#modal-delete-//{{$pas->id}}" data-toggle="modal"><button class="btn btn-primary">Ver mas</button></a>     --}}
                    {{-- </td> --}}
                {{-- </tr> --}} 
                {{-- //@include('admin.paciente.show') --}}
   {{-- @include('admin.paciente.show') --}}
   @endforeach
<div class="clearfix">

           
            </tbody>
        </table>
        {{-- {{$paciente['paciente']->render()}} --}}
    </div>
    
   
  </div>

@endsection

</div>