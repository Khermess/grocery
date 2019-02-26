<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Migrate_Supermercados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supermercados', function (Blueprint $table) {
            
            //Creamos los campos
            $table->increments('supermercados_id');
            $table->bigInteger('supermercados_nombre_id');
            $table->string('direccion',1000)->nullable();
            $table->string('coordenadas',1000)->nullable();
            $table->timestamps();
            
            //definimos la clave
            $table->primary('supermercados_id','supermercados_nombre_id');
            
            //Definimos la foreing
            $table->foreign('supermercados_nombre_id')->
                    references('supermercados_nombre_id')->
                    on('supermercados_nombre');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supermercados');
    }
}
