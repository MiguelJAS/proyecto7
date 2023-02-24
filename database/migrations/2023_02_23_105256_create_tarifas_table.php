<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifas', function (Blueprint $table) {
            $table->id();
            $table->string('diurna', 50)->nullable();
            $table->string('nocturna', 50)->nullable();
            $table->string('festivos', 50)->nullable();
            $table->string('personalizada', 50)->nullable();
            $table->unsignedBigInteger('cuidador_id')->unique();
            $table->foreign('cuidador_id')->references('id')->on('cuidadores');
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
        Schema::dropIfExists('tarifas');
    }
}
