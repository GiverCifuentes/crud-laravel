<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empesa', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Direccion');
            $table->string('NombreRepresentante');
            $table->integer('NIT');
            $table->string('Celular');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empesa');
    }
}
