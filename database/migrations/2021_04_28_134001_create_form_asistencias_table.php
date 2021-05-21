<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_asistencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coursexpostulante_id');
            $table->foreign('coursexpostulante_id')->references('id')->on('curso_por_postulantes');
            $table->date('date_assistence');
            $table->string('assistance', 3);
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
        Schema::dropIfExists('form_asistencias');
    }
}
