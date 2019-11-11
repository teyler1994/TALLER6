<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $table='clases';

    protected $primary='id';

    protected $fillable = ['nombre_clase','orden','horario','curso_id','estado' ];
   
    
    protected $hidden=['create_at','update_at'];

    public function curso(){
      return $this->belongsTo('App\Models\Curso','curso_id');
  }

  public function actividades(){
      return $this->hasMany('App\Models\Actividad');
  }
  
}
