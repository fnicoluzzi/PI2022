<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coletas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('endereco');
            $table->integer('ddd');
            $table->integer('telefone');
            $table->string('email')->unique();
            $table->string('responsavel');
            $table->string('horario');
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
        Schema::dropIfExists('coletas');
    }
}
