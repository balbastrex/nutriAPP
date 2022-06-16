<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->date('fecha_de_nacimiento');
            $table->string('dni')->unique();
            $table->string('telefono')->unique();
            $table->string('direccion')->nullable();
            $table->string('email')->unique();
            $table->string('ocupacion')->nullable();
            $table->string('turno_laboral')->nullable();
            $table->string('contacto')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
