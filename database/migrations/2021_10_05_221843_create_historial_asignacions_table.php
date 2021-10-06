<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialAsignacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_asignacions', function (Blueprint $table) {
            $table->id(column: 'id_historial');
            $table->timestamp(column: 'fecha_asignacion');
            $table->dateTime(column: 'fecha_entrega');
            $table->unsignedBigInteger(column: 'asignacion_id');
            $table->foreign('asignacion_id')->references('id_asignacion')->on('asignacion_llave_usuarios');
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
        Schema::dropIfExists('historial_asignacions');
    }
}
