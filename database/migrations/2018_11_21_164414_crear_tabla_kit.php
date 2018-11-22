<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaKit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_programa',4);
            $table->string('nom_programa', 255);
            $table->string('cod_producto',7);
            $table->string('nom_producto', 255);
            $table->string('cod_actividad',7);
            $table->string('nom_actividad', 255);
            $table->string('cod_subproducto',7);
            $table->string('nom_subproducto',255);
            $table->string('nivel');
            $table->string('tipo');
            $table->string('grupo',2);
            $table->string('clase',2);
            $table->string('familia',4);
            $table->string('item',4)->nullable();
            $table->string('insumo',255);
            $table->string('unidad_medida')->nullable();
            $table->string('clasificador');
            $table->string('tipo_calculo',1);
            $table->integer('cat1')->default(0);
            $table->integer('cat2')->default(0);
            $table->integer('cat3')->default(0);
            $table->integer('cat4')->default(0);
            $table->string('cod_reg',18);
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
        Schema::dropIfExists('kit');
    }
}
