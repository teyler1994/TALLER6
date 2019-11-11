<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table='cursos';

    protected $primary='id';

    protected $fillable = ['nombre_curso','descripcion'];
   
    protected $hidden=['create_at','update_at'];

    public function clases(){
        return $this->hasMany('App\Models\Clase');
    }

        public function actividades()
    {
        return $this->hasManyThrough('App\Models\Actividad','App\Models\Clase');
    }
}
