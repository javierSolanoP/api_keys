<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(column: 'id_usuario');
            $table->string(column: 'identificacion', length: 20);
            $table->string(column: 'nombre', length: 100);
            $table->string(column: 'apellido', length: 100);
            $table->string(column: 'email', length: 255);
            $table->string(column: 'password', length: 255);
            $table->string(column: 'telefono', length: 10);
            $table->unsignedBigInteger(column: 'role_id');
            $table->foreign('role_id')->references('id_role')->on('roles')->onDelete('cascade');
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
        Schema::dropIfExists('usuarios');
    }
}
