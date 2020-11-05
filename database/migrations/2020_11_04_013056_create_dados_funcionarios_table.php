<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();;
            $table->string('email')->nullable();
            $table->string('profissao')->nullable();
            $table->string('foto')->nullable();
            $table->string('idade')->nullable();
            $table->enum('sexo', ['Masculino', 'Feminino'])->nullable();
            $table->string('cpf')->nullable();
            $table->string('cidade')->nullable();
            $table->string('endereco')->nullable();
            $table->string('cep')->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_funcionarios');
    }
}
