<?php

use App\Http\Controllers\CatController;
Use App\Http\Controllers\LoroController;
use Illuminate\Support\Facades\Route;
use App\Models\Computer;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/angel', function () {
    return view('miprimeravista');
});

Route::get('/loros', function () {
    return view('loritos');
});

Route::get('/gatos', function () {
    return view('gatitos');
});

Route::get('/perros', function () {
    return view('perritos');
});

Route::get('/capibaras', function () {
    return view('capibaritas');
});
Route::get('/gatocontrolador', [CatController::class, 'index']);
Route::get('/otrogatocontrolador', [CatController::class, 'index2']);
Route::get('/lorocontrolador', [CatController::class, 'index3']);
Route::get('/perrocontrolador', [CatController::class, 'index4']);
Route::get('/capibaracontrolador', [CatController::class, 'index5']);

Route::get('/bimbo', function () {
    return view('pruebas.bimbo');
});

Route::get('/bimbo1', function () {
    return view('pruebas.bimbo1');
});

Route::get('/miplantillaprimera', function () {
    return view('pruebas.primeraforma');
});

Route::get('/miplantillasegunda', function () {
    return view('pruebas.segundaforma');
});

Route::get('/insertarvalor', function () {
    
    /*
    $computer = new Computer;
    $computer->model='Legion';
    $computer->mark='Lenovo';
    $computer->size=16;
    $computer->save();

    return $computer;
    

   
   $computer = new Computer;
    $computer->model='Pavilion';
    $computer->mark='Hp';
    $computer->size=16;
    $computer->save();

    return $computer;


    
    $computer = new Computer;
    $computer->model='Vivobook';
    $computer->mark='Asus';
    $computer->size=16;
    $computer->save();

    return $computer;
    */

    //SELECCIONAR BÁSICO 
    /*
    $computer = Computer::find(2);
    return $computer;
    */

    //seleccion con where
    /*
    $computer = Computer::where('model','Vivobook')->first();
    return $computer;
    */

    //modificar
    /*
    $computer = Computer::where('model','Vivobook')->first();
    $computer->model = 'Vivobook 15';
    $computer->save();
    return $computer;
    */

    //Desplegar todos
    /*
    $computer = Computer::all();
    return $computer;
    */

    //seleccionar una parte
    /*
    $computer = Computer::where('id','>=',2)->get();
    return $computer;
    */

    //selecionar orderby
    /*
    $computer = Computer::where('id','>=',2)->orderBy('id','desc')->get();
    return $computer;
    */

    //seleccionar lo seleccionado
    /*
    $computer = Computer::where('id','>=',2)
    ->select('id','model')
    ->orderBy('id','desc')
    ->get();
    return $computer;
    */

    //eliminar registro
    /*
    $computer = Computer::find(1);
    $computer->delete();
    */
    /*
    $computer = new Computer;
    $computer->model='Es una computadora demostrativa';
    $computer->mark='EcoHero';
    $computer->size=14;
    $computer->published_at='2024-10-27 13:11:00';
    $computer->is_active=true;
    $computer->size=14;
    $computer->save();
    return $computer;
    */
    /*
    //SE ACCEDE AL VALOR DE published_at

    $computer = Computer::find(1);
    return $computer->published_at;
    */

    //SE ESTABLECE UN FORMATO PARA EL DESPLIEGUE DE FECHA

    $computer = Computer::find(1);

    //EJEMPLO 1 - despliega la fecha en el formato que le indiquemos
    /*return $computer->published_at->format('d-m-Y');*/
    //EJEMPLO 2 - despliega cuanto tiempo pasó despues de publicado
    return $computer->published_at->diffForHumans();
});
