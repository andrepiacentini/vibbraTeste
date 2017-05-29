<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabelecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estabelecimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('estado');
            $table->string('pais');
            $table->enum('tipo', ['cafe,', 'restaurante','coworking','livraria','outro']);
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
        Schema::drop('estabelecimentos');
    }
}
