<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('admin','AdminController');
	Route::resource('medica','MedicamentosController');
	Route::resource('medinfo','MedicamentosinfosController');
	Route::resource('ejecutivo','EjecutivoController');
	Route::resource('vejecutivo','VEjecutivoController');
	Route::resource('estadisticas','EstadisticasController');
	Route::resource('paciente','pacientesController');
	Route::resource('paciente/consulta','PacientesConsultasController');

Route::get('/auth', function () {
    if(!Auth::check()){
    	$user=App\User::find(1);
    	Auth::login($user);
    }
    return Auth::user();

});
