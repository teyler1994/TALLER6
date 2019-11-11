<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Actividad extends JsonResource
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
            'nombre_actividad'=>$this->nombre_actividad,
            'archivo'=>$this->archivo,
            'categoria'=>$this->categoria,
        ];
    }
}
