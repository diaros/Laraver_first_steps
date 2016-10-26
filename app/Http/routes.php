<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Tipos de rutas: GET, POST, PUT, DELETE
*/
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'],function(){
   
    Route::resource('users','UsersController');
    Route::resource('categories','CategoriesController');    
    
    Route::get('users/{id}/destroy',[
        'uses'  =>  'UsersController@destroy',
        'as'    =>  'admin.users.destroy'
        
    ]);
    
});

/*Route::get('articles/{nombre?}',function($nombre = "Nombre no ingresado"){
  echo "El nombre que has colocado es: $nombre";
});*/

Route::group(['prefix'=> 'articles'],function(){

  Route::get("view/{id}",[
    'uses' => 'testControler@view',
    'as'   => 'articlesView'
  ]);
  
});