@extends('layouts.app')
@section('pestaña', 'Lista Medicamentos')

@section('titulo', 'Medicamentos')
@section('subtitulo','Detalles de Medicamentos')


@section('etiqueta')
		<a href="{{url('admin/medica/create')}}" class="dropdown-toggle">
	        <i class="fa pe-7s-id"></i> Nuevo Medicamento
	       
        </a>
       
               
@endsection
@section('content')
  <a href="#"> <span style="float:left;" class="label label-warning label-notifications-msg"><h5><strong>Total de Medicamentos:0</strong></h5></span></a>
  <a href="{{url('admin/medinfo')}}"><label style="float:right;" class="btn btn-danger">Detalles</label></a> 
<div class="container-fluid">   
	
	 <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
                <th>ID</th>
            	<th>Nombre</th>
            	<th>Utilidad</th>
                <th>Recomendacion</th>
            	<th>Total</th>
                <th>Opciones</th>
              
            </thead>
            <tbody>
            @foreach($medicamento as $medi)
                <tr>
                    <td>{{$medi->id}}</td>
                	<td>{{$medi->nombre}}</td>
                	
                	<td>{{$medi->estabilidad}}</td>
                    <td>{{$medi->recomendacion}}</td>
                    <td>{{-- {{dd($total[$no]->medicamento)}} --}}
                    <?php $no=0;?>
                    @foreach($total as $t)
                    @if($total[$no]->medicamento==$medi->medicamento)
                    
                    @endif
                    <?php $no++; ?>
                    @endforeach
                    </td>
                    <td>
{{--                         <a href="//{{URL::action('ArticuloController@edit',$art->idarticulo)}}"><button class="btn btn-danger">Editar</button></a> --}}
                         
                    
                    <a href="{{url('admin/medica/'.$medi->id)}}" data-target="{{-- #modal-delete-//{{$pas->id}} --}}" data-toggle="modal"><button class="btn btn-primary">Ver mas</button></a>    
                    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

</div>
	

@endsection