<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HospitalResource extends JsonResource
{
    const KEYS = array(
        'id' => '_id',
        'nombre' => 'Nombre',
        'telefono' => 'Teléfono',
        'direccion' => 'Dirección',
        'municipio' => 'Municipio'
    );
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $attributes = parent::toArray($request);
        $id = $attributes['_id'];
        // return parent::toArray($request);
        return [
            'id' => $id,
            'attributes' => self::getAttributes($attributes)
        ];
    }

    public static function getAttributes($data)
    {
        $attributes = array();

        foreach(self::KEYS as $key => $field) {
            $attributes[$key] = self::getFirstElementRecursive($data[$field]);
        }

        return $attributes;
    }

    public static function getFirstElementRecursive($dataArray) {
        return is_array($dataArray) ? self::getFirstElementRecursive($dataArray[0]) : $dataArray;
    }
}
