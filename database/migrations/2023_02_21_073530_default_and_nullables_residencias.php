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
            $table->integer('telefono')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('Direccion')->nullable()->change();
            $table->string('Comunidad')->nullable()->change();
            $table->string('Localidad')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('nombre');
        $table->dropColumn('CIF');
        $table->dropColumn('telefono');
        $table->dropColumn('email');
        $table->dropColumn('Direccion');
        $table->dropColumn('Comunidad');
        $table->dropColumn('Localidad');
    }
}
