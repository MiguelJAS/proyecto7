<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Residencia;
use Illuminate\Http\Request;
use App\Http\Resources\ResidenciaResource;

class ResidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $numElementos = $request->input('numElements');

        $registros = searchByField(array('nombre', 'CIF','direccion','codigo postal', 'localidad', 'telefono', 'email', 'tipo' ), Residencia::class);

        return ResidenciaResource::collection($registros->paginate($numElementos));
       }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $residencia = json_decode($request->getContent(), true);

        $residencia = Residencia::create($residencia['data']['attributes']);

        return new ResidenciaResource($residencia);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Residencia  $residencia
     * @return \Illuminate\Http\Response
     */
    public function show(Residencia $residencia)
    {
        return new ResidenciaResource($residencia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Residencia  $residencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Residencia $residencia)
    {
        $residenciaData = json_decode($request->getContent(), true);
        $residenciaData['data']['attributes']['id'] = $residenciaData['data']['id'];
        $resultado = $residencia->update($residenciaData['data']['attributes']);

        return new ResidenciaResource($residencia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Residencia  $residencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Residencia $residencia)
    {
        $residencia->delete();
    }
}
