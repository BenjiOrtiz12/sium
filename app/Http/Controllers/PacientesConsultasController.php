<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pacientesv;
use App\Talla;
use App\Peso;
use App\Cama;
use App\Sintomas;
use DB;
use Carbon\Carbon;
use Alert;

class PacientesConsultasController extends Controller
{
           public function show($id)
    {
        $paciente['paciente']=pacientesv::findOrFail($id);
        $edad=$paciente['paciente']->edad;
        $edad=Carbon::parse($edad)->age;
        $paciente['edad'] =$edad; 
        
            return view('admin.paciente.consulta.show')->with('paciente', $paciente);
    }

     public function store(Request $request)
    {
         

       $this->validate($request,[
            'paciente'=>'required',
            'talla'=>'required',
            'peso'=>'required',
            'camilla'=>'',
            'sintomas'=>'required',
            ]);

    $talla=new Talla;
    $talla->talla=$request->talla;
    $talla->paciente=$request->paciente;
    
    $talla->save();

    $peso=new Peso;
    $peso->peso=$request->peso;
    $peso->paciente=$request->paciente;
    $peso->save();

    $camilla=new Cama;
    $camilla->cama=$request->camilla;
    $camilla->paciente=$request->paciente;
    $camilla->save();

    $sintomas=new Sintomas;
    $sintomas->sintoma=$request->sintomas;
    $sintomas->paciente=$request->paciente;
    $sintomas->save();

		 $paciente['paciente']=pacientesv::findOrFail($request->paciente);
        $edad=$paciente['paciente']->edad;
        $edad=Carbon::parse($edad)->age;
        $paciente['edad'] =$edad; 
           $datos=DB::table('datos_usuario as du')
        ->where('paciente','=',$request->paciente)
        ->paginate(7);

        Alert::message('Consulta Registrada!');
            return view('admin.paciente.show',['datos'=>$datos])->with('paciente', $paciente);
    }
 
}
