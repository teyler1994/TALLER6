<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Curso extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'nombre_curso'=>$this->nombre_curso,
            'descripcion'=>$this->descripcion,
            //'Clases'=>$this->clases,
            //'Actividades'=>$this->actividades,
             'Clases'=> Clase::collection($this->clases),
             'Actividades'=> Actividad::collection($this->actividades),
        ];
    }
}
