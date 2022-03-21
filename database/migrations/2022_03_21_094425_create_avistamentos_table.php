<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvistamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avistamentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps('engadido', $precision = 0);

            //usuario que ha realizado avistamiento
            $table->foreign('user_id')->references('id')->on('users');

            //coordenadas del avistamiento
            $table->foreign('coor_id')->references('id')->on('lugars');

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
        Schema::dropIfExists('avistamentos');
    }
}
