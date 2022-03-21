<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvistamientoUsuarioEtiqueta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avistamiento_usuario_etiquetas', function (Blueprint $table) {
            $table->id();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('avistamiento_id')->references('id')->on('avistamentos');

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
        //
    }
}
