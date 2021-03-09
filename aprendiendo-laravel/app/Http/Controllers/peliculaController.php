<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peliculaController extends Controller
{
    public function index(){
        $titulo = 'Listado de mis peliculas';
        return view('pelicula.index',['titulo' => $titulo]);
    }
    
        
}
