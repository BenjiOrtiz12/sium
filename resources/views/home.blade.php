@extends('layouts.app')
@section('pestaña', 'Nuevo Paciente')

@section('titulo', 'Bienvenido')
@section('subtitulo','Has las Actividades del Dia')
@section('content')

     <h3>Bienvenido Usuario Recuerda realizar tus Actividades de la mejor manera</h3>
    
    
   

@push('scripts') 

 <script>
 $("#opc4").hide();
     function retroceder(){
      $("#opc2").show(1500);
      $("#opc3").show(1500);
      $("#opc4").hide(0);
     }
      function showinfopaciente(){

    
    $("#opc2").hide(1500);
    $("#opc3").hide(1500);
    $("#opc4").show(1500);
    $("#opc1").addClass('col-md-3');

   // $("#opc3").parent().parent().addClass('hidden');
    // $('#informacion').html("<div class='panel panel-default'><div class='panel-heading' ><a onclick='csemana()'><label style='width: 24%;' class='btn btn-success btn-lg'>Semana</label></a><a onclick='cdia()'><label style='width: 24%;' class='btn btn-success btn-lg'>Dia</label></a><a onclick='cmes()'><label style='width: 24%;' class='btn btn-success btn-lg'>Mes</label></a><a href='#'></a></div><div class='panel-body' id='titulo'><div class='box box-info'><div class='box-header with-border'><h3 class='box-title' style='font-size:17px;'>Titulo</h3></div><div class='box-body'>Grafica</div></div></div></div>")
      }

    </script>
    @endpush
@endsection
