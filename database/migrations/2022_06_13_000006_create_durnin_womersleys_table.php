<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDurninWomersleysTable extends Migration
{
    public function up()
    {
        Schema::create('durnin_womersleys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('edad');
            $table->string('peso');
            $table->string('biceps');
            $table->string('triceps');
            $table->string('subescapular');
            $table->string('suprailiaco');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
