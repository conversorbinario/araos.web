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

            $table->foreign('taxon_id')->references('id')->on('xeneros_taxas');



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
