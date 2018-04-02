<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * CreateUsersTable
 * 
 * @version 1.0.0
 * @since 1.0.0
 * @author Uday Kumar
 *
 */
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
            $table->increments('cod_ser');
            $table->string('nome');
            $table->string('usuario');
            $table->string('senha');
            $table->string('frase');
            $table->string('comida');
            $table->string('bebida');
            $table->string('hobby');
            $table->string('linkedin');
            $table->string('skype');
            $table->string('slack');
            $table->string('cpf');
            $table->string('mail')->unique();
            $table->char('sexo',1);
            $table->char('filhos',1);
            $table->char('envio_sms',1);
            $table->char('unidade', 2);
            $table->date('aniversario');
            $table->date('admissao');
            $table->date('demissao')->nullable();
            $table->string('cargo');
            $table->string('celular');
            $table->string('celular_particular');
            $table->integer('ramal');
            $table->integer('area');
            $table->integer('bonus');
            $table->integer('status');
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
        Schema::dropIfExists('users');
    }
}
//end of class CreateUsersTable
//end of file CreateUsersTable.php