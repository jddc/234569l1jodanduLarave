<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('usuarios',array('uses'=>'UsuariosController@mostrarUsuarios'));
Route::get('usuarios/nuevo',array('uses'=>'UsuariosController@nuevoUsuario'));
Route::get('usuarios/crear',array('uses'=>'UsuariosController@crearUsuario'));
Route::get('usuarios/{id}',array('uses'=>'UsuariosController@mverUsuario'));




Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/',function(){
    return Redirect::to('cats');
});


Route::get('cats',function(){
    return 'All cats';
});


Route::get('cats/{id}',function($id){
    return "Cat #$id";
})->where('id','[0-9]+'); //evaluando con expresion regular el parametro recibido


Route::get('about',function(){
    //return View::make('abouayoit')->with('number_of_cats',9000);
    return "About";
});

