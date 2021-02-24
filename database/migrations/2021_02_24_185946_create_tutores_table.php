<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->id();
            $table->string('empresa');
            $table->string('tipoDocumento');
            $table->string('documentoIdentidad');
            $table->string('name');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('pais')->nullable();
            $table->string('provincia')->nullable();
            $table->string('municipio')->nullable();
            $table->string('estado');
            $table->string('Telefono');
            $table->string('email')->unique();
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
        Schema::dropIfExists('tutores');
    }
}
