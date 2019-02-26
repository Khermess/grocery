<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Migrate_Supermercados_Nombre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supermercados_nombre', function (Blueprint $table) {
            
            //Creamos los campos
            $table->increments('supermercados_nombre_id');
            $table->string('nombre',1000);
            $table->timestamps();
            
            //clave
            $table->primary('supermercados_nombre_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supermercados_nombre');
    }
}