<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    function preguntas(){
        return view("preguntas.index");
    }
    
}
