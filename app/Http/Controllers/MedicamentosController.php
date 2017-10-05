<?php

namespace App\Http\Controllers;

use App\medicamento;
use Illuminate\Http\Request;
use Auth;
use App\Diluyente;
use DB;
use App\Estabilidad;
use App\medicamentosinfo;
use Carbon\Carbon;
use Alert;


class MedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medi = medicamento::orderBy('id','ASC')->paginate(20);
        $total=DB::table('medicamentosinfos')->get();
        // dd($medi, $total);
        return view('admin.medica.index',['total'=>$total])->with('medicamento',$medi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { $dias_horas=DB::table('dias_horas')->get();
        
        return view('admin.medica.create',['dias_horas'=>$dias_horas]);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medica = new medicamento;
        $medica->nombre = $request->nombre;
        $medica->utilidad=$request->utilidad;
        $diluyente =new Diluyente;
        $iddiluyente=count(DB::table('diluyentes')->get());
        $diluyente->diluyente = $request->diluyente;
        $diluyente->save();
        $medica->diluyente = $iddiluyente+1;
        $medica->recomendacion = $request->recomendacion;
        $medica->estabilidad = $request->estabilidad;

             
        $medica->save();
       
            return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $medi = medicamentosinfo::orderBy('id','ASC')
        ->where('medicamento','=',$id)
        ->paginate(20);
        // if(count($medi)>0){
        return view('admin.medica.show'/*,['datos'=>$datos]*/)->with('medi', $medi);
        // }
        // else{
        // Alert::message('No hay medicamentos registrados!');

        return back();
        
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(medicamentos $medicamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medicamentos $medicamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicamentos $medicamentos)
    {
        //
    }
}
