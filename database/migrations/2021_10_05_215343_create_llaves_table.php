<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLlavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llaves', function (Blueprint $table) {
            $table->id(column: 'id_llave');
            $table->string(column: 'imagen_llave', length: 255);
            $table->string(column: 'url_codigo_qr', length:  255);
            $table->string(column: 'codigo_llave', length: 45);
            $table->unsignedBigInteger(column: 'ambientes_id');
            $table->foreign('ambientes_id')->references('id_ambiente')->on('ambientes')->onDelete('cascade');
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
        Schema::dropIfExists('llaves');
    }
}
