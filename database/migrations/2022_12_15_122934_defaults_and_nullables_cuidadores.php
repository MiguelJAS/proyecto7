<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DefaultsAndNullablesCuidadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cuidadores', function (Blueprint $table) {

            $table->string('nombre')->nullable()->change();
            $table->string('apellidos')->nullable()->change();
            $table->string('dni', 9)->nullable()->change();
            $table->integer('telefono')->nullable()->change();
            $table->string('email', 65)->nullable()->change();
            $table->string('Domicilio')->nullable()->change();
            $table->string('Comunidad')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cuidadores', function (Blueprint $table) {

            $table->dropColumn('nombre');
            $table->dropColumn('apellidos');
            $table->dropColumn('dni', 9);
            $table->dropColumn('telefono');
            $table->dropColumn('email', 65);
            $table->dropColumn('Domicilio');
            $table->dropColumn('Comunidad');

        });
    }
}
