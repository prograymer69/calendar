<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    function preguntas(){
        $data = [
            [
                "buttons" => false,
                "numero_pregunta" => "1",
                "pregunta" => "¿Cuál de las siguientes afirmaciones es correcta?",
                "respuestas" => [
                    "Las palabras homófonas se escriben de la misma forma.",
                    "Todas las respuestas son correctas.",
                    "Las palabras homófonas suenan igual.",
                    "Las palabras homófonas tienen diferente significado."
                ]
            ],
            [
                "buttons" => false,
                "numero_pregunta" => "2",
                "pregunta" => "¿Cuál es el antónimo de la palabra alto?",
                "respuestas" => [
                    "Corto.",
                    "Pequeño.",
                    "Bajo.",
                    "Grande."
                ]
            ],
            [
                "buttons" => false,
                "numero_pregunta" => "2",
                "pregunta" => "¿En qué año comenzó la Segunda Guerra Mundial?",
                "respuestas" => [
                    "1940.",
                    "1942.",
                    "1939.",
                    "1941."
                ]
            ],
            [
                "buttons" => false,
                "numero_pregunta" => "2",
                "pregunta" => "¿Cuánta sangre tiene el cuerpo humano?",
                "respuestas" => [
                    "Entre 4 y 5 litros.",
                    "Entre 5 y 6 litros.",
                    "Entre 3 y 4 litros.",
                    "Entre 1 y 2 litros."
                ]
            ],
            [
                "buttons" => true,
                "numero_pregunta" => "2",
                "pregunta" => "¿A qué equivale un metro?",
                "respuestas" => [
                    "100 dm.",
                    "100 mm.",
                    "10 m.",
                    "100 cm."
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

    function resultados(){
        $data = [
            [
                "evaluacion" => "Matematicas 2",
                "calificacion" => "3.0"
            ],
            [
                "evaluacion" => "Desarrollo de aplicaciones",
                "calificacion" => "5.0"
            ],
            [
                "evaluacion" => "Logística",
                "calificacion" => "4.0"
            ],
            [
                "evaluacion" => "Servicio al cliente",
                "calificacion" => "4.5"
            ],
            [
                "evaluacion" => "buenas practicas en el trabajo",
                "calificacion" => "4.8"
            ],
            [
                "evaluacion" => "etica",
                "calificacion" => "3.8"
            ],
            [
                "evaluacion" => "solucion de problemas",
                "calificacion" => "5.0"
            ]
        ];

        return view("preguntas.resultados")->with("data", $data);
    }
    
}
