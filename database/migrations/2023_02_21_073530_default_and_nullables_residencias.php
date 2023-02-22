<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DefaultAndNullablesResidencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('residencias', function (Blueprint $table) {

            $table->string('nombre')->default('Residencia')->change();
            $table->string('CIF')->default('-----')->change();
            $table->string('direccion')->nullable()->change();
            $table->integer('codigo postal')->default('30320')->change();
            $table->string('localidad')->default('Cartagena')->change();
            $table->integer('telefono')->nullable()->change();
            $table->string('email')->nullable()->unique()->change();
            $table->string('tipo')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residencias');
    }
}
