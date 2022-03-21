<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividuosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuos', function (Blueprint $table) {
            $table->id();
            $table->enum('sexo', ['male', 'female']);
            $table->enum('plumaje', ['estival', 'invernal', 'eclipse', 'juvenil', 'inmaduro', 'invierno1', 'verano1']);

            $table->unsignedBigInteger('avistamento_id');
            $table->foreign('avistamento_id')->references('id')->on('avistamentos');

            $table->unsignedBigInteger('tipo_ave_id');
            $table->foreign('tipo_ave_id')->references('id')->on('tipo_aves');

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
        Schema::dropIfExists('individuos');
    }
}
