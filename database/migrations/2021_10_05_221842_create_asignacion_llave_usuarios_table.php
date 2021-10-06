<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionLlaveUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacion_llave_usuarios', function (Blueprint $table) {
            $table->id(column: 'id_asignacion');
            $table->unsignedBigInteger(column: 'usuario_id');
            $table->unsignedBigInteger(column: 'llave_id');
            $table->foreign('usuario_id')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->foreign('llave_id')->references('id_llave')->on('llaves')->onDelete('cascade');
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
        Schema::dropIfExists('asignacion_llave_usuarios');
    }
}
