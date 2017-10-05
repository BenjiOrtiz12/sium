<?php

namespace App\Http\Controllers;

use App\pacientes;
use App\pacientesv;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;
use App\Talla;
use App\Edad;
use App\Peso;
use DB;
use Alert;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          if ($request)
        {
            $query=trim($request->get('searchText'));
             $pass['paciente']=DB::table('pacientesv as a')
             ->where('a.nombre','LIKE','%'.$query.'%')
            ->orderBy('id','ASC')->paginate(10);
            $pass['total']=count(DB::table('pacientesv')
            ->get());
            // dD($pass['paciente']);
            

   //     $pass = pacientesv::orderBy('id','ASC')->paginate(10);

        return view('admin.paciente.index',["searchText"=>$query])->with('paciente', $pass);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pass=pacientesv::count();
            $genero=DB::table('generos')
            ->get();
            $cama=DB::table('camas')
            ->get();


        return view('admin.paciente.create',['genero'=>$genero,'cama'=>$cama])->with('paciente',$pass);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         

       $this->validate($request,[
            'nombre'=>'required',
            'domicilio'=>'required',
            'edad'=>'required',
            'alergias'=>'required',
            'numero_afiliacion'=>'required',
            'genero'=>'required',
            ]);

    $paciente=new pacientes;
    $paciente->nombre=$request->nombre;
    $paciente->domicilio=$request->domicilio;
    $paciente->alergias=$request->alergias;
    $edad=new Edad;
    $idedad=count(DB::table('edads')->get());
    
    $edad->edad=$request->edad;
    $edad->save();
    $paciente->edad=$idedad+1;
    // $peso=new Peso;
    // $peso->peso=$request->peso;
    //  $idpeso=count(DB::table('peso')->get());
    // $peso->save();
    // $paciente->peso=$idpeso+1; 
    $paciente->genero=$request->genero;
    $paciente->numero_afiliacion=$request->numero_afiliacion;
    // $talla=new Talla;
    // $idtalla=count(DB::table('talla')->get());
    //   $talla->talla=$request->talla;
    //   $talla->save();
    // $paciente->talla=$idtalla+1;
    // $paciente->cama=$request->cama;

    $paciente->save();   
    // return redirect()->route('admin/paciente/index')->with($notificacion);
    // return Redirect::route('admin.paciente')->with($notificacion);
    // Redirect::route('admin.paciente.index');
     // return view('admin.paciente.index')->with($notificacion);
      //return redirect()->route('admin.paciente.index')->with('alert-success','La  Informacion se ah guardado!');

        $pass = pacientesv::orderBy('id','ASC')->paginate(10);
        Alert::message('Paciente Registrado!');

          if ($request)
        {
            $query=trim($request->get('searchText'));
             $pass['paciente']=DB::table('pacientesv as a')
             ->where('a.nombre','LIKE','%'.$query.'%')
            ->orderBy('id','ASC')->paginate(10);
            $pass['total']=count(DB::table('pacientesv')
            ->get());
       return view('admin.paciente.index',["searchText"=>$query])->with('paciente', $pass);
    }}
    /**
     * Display the specified resource.
     *
     * @param  \App\pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
        $paciente['paciente']=pacientesv::findOrFail($id);
        $edad=$paciente['paciente']->edad;
        $edad=Carbon::parse($edad)->age;
        $paciente['edad'] =$edad; 
        // dd($paciente);
        $datos=DB::table('datos_usuario as du')
        ->where('paciente','=',$id)
        
        ->paginate(7);
 
        return view('admin.paciente.show',['datos'=>$datos])->with('paciente', $paciente);
    }

 

    /**
     * Show the form for editing the specifiedx resource.
     *
     * @param  \App\pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function edit(pacientes $pacientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pacientes $pacientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
      public function destroy($id){
        

        
    }
}
