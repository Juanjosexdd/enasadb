<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleRequisicionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_requisicion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('requisicion_id');
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('almacen_id');
            $table->string('cantidad');

            $table->foreign('requisicion_id')
                  ->references('id')
                  ->on('requisicions');

            $table->foreign('producto_id')
                  ->references('id')
                  ->on('productos');

            $table->foreign('almacen_id')
                  ->references('id')
                  ->on('almacens');

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
        Schema::dropIfExists('detalle_requisicion');
    }
}
