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
          
        $libros = DB::table('elementos')
        ->join('grupos','grupos.id', '=', 'elementos.grupo_id')
        ->where('grupo_id','<=',2)
        ->select('elementos.*','grupos.id as grupo_id','grupos.nom_grupo','grupos.precioDolar','grupos.cant_pro')
        ->get();

        $data = file_get_contents('https://s3.amazonaws.com/dolartoday/data.json');
        $json = json_decode($data, true);
        $dolar = $json['USD']['promedio'];
        
        $totalDigital = ($libros[0]->precioDolar)*($dolar);
        $totalFisico = ($libros[1]->precioDolar)*($dolar);
        
        return view('templates.main', compact('libros','totalDigital','totalFisico'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Rutas resource*/

Route::resource('/registro','RegistroController');
Route::resource('/compra','ComprasController');

/*Fin rutas resource */

Route::post('/contact','ContactosController@sendMessage');
