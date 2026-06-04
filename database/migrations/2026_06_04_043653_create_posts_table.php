<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecutar las migraciones y modificar tablas: 
     * 
     *        php artisan migrate
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->timestamps();
        });
    }

    /**
     * Revertir las migraciones:
     * 
     *      php artisan migrate:rollback
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};


/*
     * Eliminar las tablas y ejecutar de nuevo las migraciones: 
     * 
     * * Nota: NO HACER esto en PRODUCCIÓN solo en entorno de Desarrollo
     * 
     *        php artisan migrate:fresh 
     * 
     */