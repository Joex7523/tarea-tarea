<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_futbols', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',55);
            $table->string('ciudadOrigen',55);
            $table->string('ligaPertenece',55);
            $table->string('apodo',55);
            $table->string('correo',55);
            $table->string('web',55);
            $table->integer('telefono');

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
        Schema::dropIfExists('equipo_futbols');
    }
};
