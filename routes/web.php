<?php

use Illuminate\Support\Facades\Route;

/* 
 Route::get('/', function () {
    return view('welcome');
 });
*/


/*

// ------------------------------------------------------ RUTAS DE TIPO GET -----------------------------------------------------------


//          URI    VISTA
Route::view('/', 'welcome');

Route::view('/contacto', 'contact');

Route::view('/blog', 'blog');

Route::view('/nosotros', 'about');

*/

// ------------------------------------------- RUTAS CON NOMBRE - GET -----------------------------------------------------------------

/*
//          URI    VISTA     NOMBRE RUTA
Route::view('/', 'welcome')->name('nHome');

Route::view('/contacto', 'contact')->name('nContact');

Route::view('/blog', 'blog')->name('nBlog');

Route::view('/nosotros', 'about')->name('nAbout');
*/

// ------------------------------------------- PARAMETROS EN RUTAS  - GET -----------------------------------------------------------------

//          URI    VISTA     NOMBRE RUTA
Route::view('/', 'welcome')->name('nHome');

Route::view('/contacto', 'contact')->name('nContact');

Route::get('/blog', function(){
   // Creamos una varible que contiene un array 
   $posts = [
      ['title' => 'First post'],
      ['title' => 'Second post'],
      ['title' => 'Third post'],
      ['title' => 'Fourth post'],
   ]; 

   // Retornamos la vista blog junto con la variable 'posts' para esa vista
   return view('blog', ['posts' => $posts]); // [ Crea una clave llamada posts => y guárdale el contenido de la variable $posts ]

})->name('nBlog'); 
                        
Route::view('/nosotros', 'about')->name('nAbout');


