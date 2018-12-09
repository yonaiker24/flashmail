<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ordenes',function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_destinatario',20);                                                                                                                                                                               
            $table->string('apellido_destinatario',20);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
            $table->string('direccion',150);   
          
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
