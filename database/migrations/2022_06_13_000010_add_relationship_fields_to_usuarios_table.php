<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToUsuariosTable extends Migration
{
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->unsignedBigInteger('meta_id')->nullable();
            $table->foreign('meta_id', 'meta_fk_6764946')->references('id')->on('meta');
        });
    }
}
