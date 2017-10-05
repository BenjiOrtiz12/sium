<?php

namespace App\Http\Controllers;
use App\medicamento;
use App\medicamentosinfo;
use Illuminate\Http\Request;
use DB;
class MedicamentosinfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.medinfo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicamento = medicamentos::pluck('nombre', 'id');
        return view('admin.medinfo.create',compact('medicamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return view('admin.medinfo.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\medicamentosinfos  $medicamentosinfos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      

$medi=DB::table('medicamentos as m')
        ->where('m.id','=',$id)
        ->get();
        

             
        return view('admin.medinfo.show'/*,['datos'=>$datos]*/)->with('medi', $medi);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medicamentosinfos  $medicamentosinfos
     * @return \Illuminate\Http\Response
     */
    public function edit(medicamentosinfos $medicamentosinfos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medicamentosinfos  $medicamentosinfos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medicamentosinfos $medicamentosinfos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medicamentosinfos  $medicamentosinfos
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicamentosinfos $medicamentosinfos)
    {
        //
    }
}
