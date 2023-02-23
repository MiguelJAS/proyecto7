<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            //$table->id();
            $table->unsignedBigInteger('cuidador_id');
            $table->unsignedBigInteger('customer_id');
            $table->timestamps();
            $table->foreign('cuidador_id')->references('id')->on('cuidadores');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->primary(['cuidador_id', 'customer_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
