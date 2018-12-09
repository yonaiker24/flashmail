<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Direcciones',function (Blueprint $table) {
            $table->increments('id');
            $table->string('ciudad',20);                                                                                                                                                                               
            $table->string('pais',40);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
            $table->string('estado',20);
            $table->string('zona',100);
            $table->string('codigo_postal',20);
            $table->integer('cliente_id')->unsigned();


            $table->foreign('cliente_id')->references('id')->on('Clientes');
            
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
