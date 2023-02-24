<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TarifaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'attributes' => [
                'diurna' => $this->diurna,
                'nocturna' => $this->nocturna,
                'festivos' => $this->festivos,
                'personalizada' => $this->personalizada,
                'cuidador_id' => $this->cuidador_id
                //'cuidador' => new CuidadorResource($this->cuidador)
            ]
        ];
    }
}
