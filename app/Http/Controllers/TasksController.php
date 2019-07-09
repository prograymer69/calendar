<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Validator;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'Por favor defina un nombre.',
            'description.required' => 'Por favor describa el evento en el campo descripción.',
            'task_date.required' => 'Por favor seleccione la fecha del evento.'
        ];
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'task_date' => 'required'
        ], $messages);

        
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        Task::create($request->all());
        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function getEvents(Request $request){
        if(isset($request->id)){
            $eventos = Task::where("id", $request->id)->get();    
        }else{
            $eventos = Task::where("task_date", $request->fecha)->get();
        }
        
        $html = "<h2 class='subtitle'>Eventos</h2>";
        
        if (count($eventos) > 0) {
            foreach ($eventos as $evento) {
                $html.= '
                            <div class="itemE">
                                <p class="tituloE"><span class="fa fa-calendar-check"></span> <strong>'.$evento->name.'</strong></p>
                                <p>'.$evento->description.'</p>
                                <p>'.$evento->task_date.'</p>
                            </div>
                ';
            }
        }else{
            $html = "<p style='text-align: center'>No hay eventos para esta fecha</p>";
        }
        return response()->json(["html" => $html]);
    }
}
