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

//Route::group(['middleware' => ['auth']], function () {
    Route::resource('tasks', 'TasksController');
    Route::post('getEvents', 'TasksController@getEvents');
    
    Route::get('Preguntas', 'preguntasController@preguntas');
    Route::get('Resultados', 'preguntasController@resultados');
//});

Auth::routes();
