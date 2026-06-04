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

// Creamos una varible que contiene un array 
$posts = [
   ['title' => 'First post'],
   ['title' => 'Second post'],
   ['title' => 'Third post'],
   ['title' => 'Fourth post'],
]; 

//          URI    VISTA     NOMBRE RUTA
Route::view('/', 'welcome')->name('nHome');

Route::view('/contacto', 'contact')->name('nContact');

//            URI    VISTA    DATOS (Opcional)    NOMBRE RUTA
Route::view('/blog', 'blog', ['posts' => $posts])->name('nBlog');  //  [ Crea una clave llamada posts => y guárdale el contenido de la variable $posts ] de esta forma la variable se pasa a la vista blog.blade.php
                        
Route::view('/nosotros', 'about')->name('nAbout');


