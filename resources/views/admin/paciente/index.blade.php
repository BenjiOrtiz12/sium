@extends('layouts.app')
@section('pestaña', 'Lista Pacientes')

@section('titulo', 'Paciente')
@section('subtitulo','Detalles, del Paciente')


@section('etiqueta')
		<a href="{{url('admin/paciente/create')}}" class="dropdown-toggle">
	        <i class="fa pe-7s-id"></i> Nuevo Paciente
	        <p class="hidden-lg hidden-md">Dashboard</p>
        </a>
@endsection


@section('content')
 <a href="#"> <span style="float:left;" class="label label-success label-notifications-msg"><h5><strong>Total de pacientes:{{($paciente['total'])}} </strong></h5></span></a>   
<div class="col-md-6" style="float:right" >
{!! Form::open(array('url'=>'admin/paciente','method'=>'GET','autocomplete'=>'on','role'=>'search')) !!}
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </span>
        </div>
    </div>
{{Form::close()}}
</div>
	 <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
                {{-- <th>ID</th> --}}
                <th>Numero de Afiliacion</th>
            	<th>Nombre</th>
                <th>Edad</th>
                <th>Domicilio</th>
                <th>Genero</th>
                {{-- <th>Peso</th> --}}
            	{{-- <th>Talla</th> --}}
            	{{-- <th>Camilla</th> --}}
                <th>Opciones</th>
            </thead>
            <tbody>
            @foreach($paciente['paciente'] as $pas)
                <tr>
                {{-- <td>{{$pas->id}}</td> --}}
                <td>{{$pas->numero_afiliacion}}</td>
                	<td>{{$pas->nombre}}</td>
                	<td>{{\Carbon\Carbon::parse($pas->edad)->age}}</td>
                    <td>{{$pas->domicilio}}</td>
                	{{-- <td>{{$pas->peso}}</td> --}}
                	<td>{{$pas->genero}}</td>
                	{{-- <td>{{$pas->talla}}</td> --}}
                	{{-- <td>{{$pas->cama}}</td> --}}
                    <td>
                    <a href="{{url('admin/paciente/'.$pas->id)}}" data-target="{{-- #modal-delete-//{{$pas->id}} --}}" data-toggle="modal"><button class="btn btn-primary">Ver mas</button></a>    
                    </td>
                </tr>
                {{-- //@include('admin.paciente.show') --}}
   {{-- @include('admin.paciente.show') --}}
<div class="clearfix">

                @endforeach
            </tbody>
        </table>
        {{$paciente['paciente']->render()}}
    </div>
    

@endsection