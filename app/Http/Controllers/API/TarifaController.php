<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tarifa;
use Illuminate\Http\Request;
use App\Http\Resources\TarifaResource;

class TarifaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $numElementos = $request->input('numElements');

        $registros = searchByField(array('diurna', 'nocturna','festivos', 'personalizada'), Tarifa::class);

        return TarifaResource::collection($registros->paginate($numElementos));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarifa = json_decode($request->getContent(), true);

        $tarifa = Tarifa::create($tarifa['data']['attributes']);

        return new TarifaResource($tarifa);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarifa $tarifa)
    {
        return new TarifaResource($tarifa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarifa $tarifa)
    {
        $tarifaData = json_decode($request->getContent(), true);
        $tarifaData['data']['attributes']['id'] = $tarifaData['data']['id'];
        $resultado = $tarifa->update($tarifaData['data']['attributes']);

        return new TarifaResource($tarifa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarifa $tarifa)
    {
        $tarifa->delete();
    }
}
