<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class supermercados extends Model
{
    //El nombre de la tabla
    protected $table="supermercados";
    
    
    //esto es un accesor. Se define con el nombre del slug del campo descripcion_guay enmedio.
    //Se llama automaticamente cuando alguien intenta leer la columna descripcion_guay
    public function getDescripcionGuayAttribute($value){
        //Ponemos el primer caracter en mayusculas
        return ucfirst($value);
    }
    
    //El mutator es igual pero para escribir
    public function setDescripcionGuayAttribute($value){
        $this->attributes['descripcion_guay'] = strtolower($value);
    }
}
