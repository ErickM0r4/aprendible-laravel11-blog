<?php

use App\Http\Controllers\PostController;
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

Route::get('/blog', [PostController::class, 'index'])->name('nBlog'); // [controlador, función]
                        
Route::view('/nosotros', 'about')->name('nAbout');


