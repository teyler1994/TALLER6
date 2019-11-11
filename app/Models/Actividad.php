<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table='actividades';

    protected $primary='id';

    protected $fillable = ['nombre_actividad','archivo','categoria','tiempo','orden','estado','clase_id' ];
   

    protected $hidden=['create_at','update_at'];
    
    public function clase(){
        return $this->belongsTo('App\Models\Clase','clase_id');
    }

    protected $casts = [
        'archivo'=>'array'
    ];
}
