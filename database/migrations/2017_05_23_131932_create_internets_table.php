<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_avaliacao')->unsigned();
            $table->foreign('id_avaliacao')->references('id')->on('avaliacoes');
            $table->enum('internet', ['sim', 'nao']);
            $table->string('velocidade');
            $table->enum('tipo', ['aberta', 'fechada']);
            $table->string('senha');
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
        Schema::drop('internets');
    }
}
