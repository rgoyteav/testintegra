<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            //
        });
        Schema::create('usuarios', function (Blueprint $table){
            $table->id();
            $table->string('nombreusuario', 20);
            $table->string('password', 191);
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->string('dni', 8);
            $table->date('fecha_nac', 20);
            $table->string('legajo', 20);
            $table->string('rol', 20);
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
        Schema::table('usuarios', function (Blueprint $table) {
            //
        });
        Schema::drop('usuarios');
    }
}
