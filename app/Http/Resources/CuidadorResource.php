<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CuidadorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        $cuidadorResource = [
            'id' => $this->id,
            'attributes' => [
                'nombre' => $this->nombre,
                'apellidos' => $this->apellidos,
                'dni' => $this->dni,
                'telefono' => $this->telefono,
                'email' => $this->email,
                'Domicilio' => $this->Domicilio,
                'Comunidad' =>$this->Comunidad,
                'user_id' => $this->user_id,
                'user' => new UserResource($this->user)
            ]
        ];
        return $cuidadorResource;
    }
}
