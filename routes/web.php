<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');

});/*ahora te enseño mi lista de controladoresy por debajo de alcanzan a ver los modelos*/
Route::group(['prefix' => 'admin'], function(){
Route::group(['middleware'=>['web']], function(){
Auth::routes();
	Route::resource('admin','AdminController');
	Route::resource('medica','MedicamentosController');
	Route::resource('medinfo','MedicamentosinfosController');
	Route::resource('ejecutivo','EjecutivoController');
	Route::resource('vejecutivo','VEjecutivoController');
	Route::resource('estadisticas','EstadisticasController');
	Route::resource('paciente','pacientesController');
	Route::resource('paciente/consulta','PacientesConsultasController');

});
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth', function () {
    if(!Auth::check()){
    	$user=App\User::find(1);
    	Auth::login($user);
    }
    return Auth::user();

});

