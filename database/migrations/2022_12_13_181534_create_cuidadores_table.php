<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuidadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuidadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('dni', 9);
            $table->integer('telefono');
            $table->string('email', 65);
            $table->string('Domicilio');
            $table->string('Comunidad');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('cuidadores');
    }
}
