<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    function preguntas(){
        $data = [
            [
                "buttons" => true,
                "numero_pregunta" => "1",
                "pregunta" => "Pregunta 1",
                "respuestas" => [
                    "respuesta 1",
                    "respuesta 2"
                ]
            ],
            [
                "buttons" => false,
                "numero_pregunta" => "2",
                "pregunta" => "Pregunta 1",
                "respuestas" => [
                    "respuesta 1",
                    "respuesta 2"
                ]
            ]

        ];

        $formularios = [];
        foreach($data as $item){
            $formularios[] = $this->prepareCuestionario($item);
        }
        
        return view("preguntas.index")->with("formularios", $formularios)->with("active", true);
    }

    function prepareCuestionario($data){
        return view("preguntas.preguntas")->with("data", $data);
    }
    
}
