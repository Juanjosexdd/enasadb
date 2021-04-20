<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClacificiacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clacificiacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nombre");
            $table->string("abreviado");
            $table->string("descripcion");
            $table->boolean('estatus')->default(1);
            $table->string("usuario_id");
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
        Schema::dropIfExists('clacificiacions');
    }
}