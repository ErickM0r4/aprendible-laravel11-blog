<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Importamos para poder hacer consultas a la Basa de Datos

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*
        // Creamos una varible que contiene un array 
        $posts = [
            ['title' => 'First post'],
            ['title' => 'Second post'],
            ['title' => 'Third post'],
            ['title' => 'Fourth post'],
        ];
        */

        $posts = DB::table('posts')->get(); // Accedemos a la tabla posts de nuestra Base de Datos y hacemos la consulta

        // Retornamos la vista blog junto con la variable 'posts' para esa vista
        return view('blog', ['posts' => $posts]); // [ Crea una clave llamada posts => y guárdale el contenido de la variable $posts ]
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
