@extends('layouts.app')
@section('pestaña', 'Lista Medicamentos')

@section('titulo', 'Medicamentos')
@section('subtitulo','Detalles de Medicamentos')


@section('etiqueta')
		<a href="{{url('admin/medica/create')}}" class="dropdown-toggle">
	        <i class="fa pe-7s-id"></i> Nuevo Medicamento
	        <p class="hidden-lg hidden-md">jejej</p>
        </a>
       
               
@endsection
@section('content')
 
	

@endsection