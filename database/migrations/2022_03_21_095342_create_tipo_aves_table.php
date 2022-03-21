<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoAvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_aves', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');

            //TODO esto tengo que ajustarlo el numero de columnas segun cuantas características puedas brindarles a las personas
            $table->string('caracteristica1');

            $table->unsignedBigInteger('xenero_esp_id');
            $table->foreign('xenero_esp_id')->references('id')->on('xen_espes');



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
        Schema::dropIfExists('tipo_aves');
    }
}
