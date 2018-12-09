<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clientes',function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',20);                                                                                                                                                                               
            $table->string('apellido',20);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
            $table->date('fecha_nacimiento');
            $table->integer('usuario_id')->unsigned();


            $table->foreign('usuario_id')->references('id')->on('Usuarios');
          
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
        //
    }
}
