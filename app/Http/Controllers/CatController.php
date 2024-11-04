<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index(){
        $nombre = "Angel Anselmo";
        $apellido = 'Kauil Kumul';
    return view('controla.gato')
        ->with ('minombre', $nombre)
        ->with ('miapellido', $apellido);
    
    }
    public function index2(){
        $nombre = "Angel Anselmo";
        $apellido = 'Kauil Kumul';
    return view('controla.otrogato')
        ->with ('minombre', $nombre)
        ->with ('miapellido', $apellido);
    
    }
    public function index3(){
        $nombre = "Angel Anselmo";
        $apellido = 'Kauil Kumul';
    return view('controla.loro')
        ->with ('minombre', $nombre)
        ->with ('miapellido', $apellido);
    
    }
    public function index4(){
        $nombre = "Angel Anselmo";
        $apellido = 'Kauil Kumul';
    return view('controla.perro')
        ->with ('minombre', $nombre)
        ->with ('miapellido', $apellido);
    
    }
    public function index5(){
        $nombre = "Angel Anselmo";
        $apellido = 'Kauil Kumul';
    return view('controla.capibara')
        ->with ('minombre', $nombre)
        ->with ('miapellido', $apellido);
    
    }
}
