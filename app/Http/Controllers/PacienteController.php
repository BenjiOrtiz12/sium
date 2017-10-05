<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pacientes;
use App\Edad;
use DB;

class PacienteController extends Controller
{
     public function index()
    {
      return view('paciente.index');
    }
   	public function store(Request $request)
    {
  	$notificacion=array(
         'message'=>'Paciente registrado sastifactoriamente!',
         'alert-type'=>'success');
		$paciente=new pacientes;

       $this->validate($request,[
            'nombre'=>'required',
            'edad'=>'required',
            'peso'=>'required',
            'talla'=>'required',
            'genero'=>'required',
            'cama'=>'required',
            'enfermedad'=>'',
            ]);

          
    $paciente->nombre=$request->nombre;
    $edad=new pacientes;
    $edad->edad=$request->edad;
    $edad->save();
    
    $paciente->edad=$request->edad;
    $paciente->peso=$request->peso;
    $paciente->genero=$request->genero;
    $paciente->talla=$request->talla;

 		$paciente->save();
          return redirect()->route('home')->with($notificacion);
    }

}
