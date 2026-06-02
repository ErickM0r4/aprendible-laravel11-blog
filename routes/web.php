<?php

use Illuminate\Support\Facades\Route;

/* 
 Route::get('/', function () {
    return view('welcome');
 });
*/


// RUTAS DE TIPO - GET

 //         URI    VISTA
Route::view('/', 'welcome');

Route::view('/contacto', 'contact');

Route::view('/blog', 'blog');

Route::view('/nosotros', 'about');

// -------------------------------------------------------------------------------------------------------------------------------------


