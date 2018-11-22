<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_meta',4);
            $table->string('funcion',2);
            $table->string('division',3);
            $table->string('grupo',4);
            $table->string('producto',7);
            $table->string('actividad',7);
            $table->string('finalidad',7);
            $table->string('nom_meta',256);
            $table->string('cod_programa',4);
            $table->string('cod_reg',18)->default(0);
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
        Schema::dropIfExists('meta');
    }
}
