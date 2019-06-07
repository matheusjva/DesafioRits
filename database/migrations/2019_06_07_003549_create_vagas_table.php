<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao');
            $table->string('atividades');
            $table->string('requisitos');
            $table->enum('tipo', ['EMPREGO', 'ESTAGIO', 'TEMPORARIO']);
            $table->string('jornada');
            $table->string('habilidades')->nullable();
            $table->float('remuneracao');
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
        Schema::dropIfExists('vagas');
    }
}
