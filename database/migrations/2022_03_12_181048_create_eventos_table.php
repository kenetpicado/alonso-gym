<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->default(date('Y-m-d'));
            $table->enum('tipo', ['PAGO', 'INASISTENCIA']);
            $table->string('monto', 5);
            $table->unsignedBigInteger('entrenador_id');
            $table->foreign('entrenador_id')->references('id')->on('entrenadors');
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
        Schema::dropIfExists('eventos');
    }
}
