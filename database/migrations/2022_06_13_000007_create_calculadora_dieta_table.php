<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalculadoraDietaTable extends Migration
{
    public function up()
    {
        Schema::create('calculadora_dieta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('grgsrwg')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
