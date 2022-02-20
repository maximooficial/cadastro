<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email',250)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            //valores do cadastro dos moradores
            $table->string('cpf' ,250)->unique()->nullable();
            $table->string('birthday')->nullable();
            $table->string('telefone')->nullable();
            $table->string('conjuge')->nullable();
            $table->string('cpfconjuge')->nullable();
            $table->string('dateconjuge')->nullable();
            $table->string('adultos')->nullable();
            $table->string('criancas')->nullable();
            $table->string('trabalham')->nullable();
            $table->string('endereco')->nullable();
            $table->string('numero')->nullable();
            $table->string('localizacao')->nullable();
            $table->string('geolocalizacao')->nullable();
            $table->string('terreno')->nullable();
            $table->string('quadra')->nullable();
            $table->string('valor1')->nullable();
            $table->string('valor2')->nullable();
            $table->string('valor3')->nullable();
            $table->string('valor4')->nullable();
            $table->string('valor5')->nullable();
            $table->string('valor6')->nullable();
            $table->string('valor7')->nullable();
            $table->string('valor8')->nullable();
            $table->string('total')->nullable();
            $table->string('status')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
