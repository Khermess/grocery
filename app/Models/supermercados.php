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
    
    
    //Foreing de la tabla supermercados_nombre
    public function nombre(){
        return $this->hasMany('App\Models\supermercados_nombre', //tabla de donde viene la foreing
                'supermercados_nombre_id', //clave foreing (opcional)
                'supermercados_nombre_id'); //clave local (opcional)
    }
    
    //Si hubiera alguna relacion manyTomany:
    //In addition to customizing the name of the joining table, you may also 
    //customize the column names of the keys on the table by passing additional 
    //arguments to the belongsToMany method. The third argument is the foreign 
    //key name of the model on which you are defining the relationship, while 
    //the fourth argument is the foreign key name of the model that you are joining to:
    //return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
}
