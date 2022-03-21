<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaIndividuosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_individuos', function (Blueprint $table) {
            $table->id();

            $table->string('foto_path');
            $table->string('audio_path');


            $table->unsignedBigInteger('individuo_id');
            $table->foreign('individuo_id')->references('id')->on('individuos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_individuos');
    }
}
