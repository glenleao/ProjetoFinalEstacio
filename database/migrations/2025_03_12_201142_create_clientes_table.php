<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nomeTutor');
            $table->string('celular');
            $table->string('email');
            $table->string('endereco');
            $table->string('cep');
            $table->string('nomePet');
            $table->string('raca');
            $table->string('idade');
            $table->string('sexo');
            $table->string('castrado');
            $table->date('dataEntrada');
            $table->date('dataSaida');
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
        Schema::dropIfExists('clientes');
    }
}
