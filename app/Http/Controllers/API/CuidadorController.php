<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cuidador;
use Illuminate\Http\Request;
use App\Http\Resources\CuidadorResource;

class CuidadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CuidadorResource::collection(Cuidador::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuidador = json_decode($request->getContent(), true);

        $cuidador = Cuidador::create($cuidador['data']['attributes']);

        return new CuidadorResource($cuidador);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuidador  $cuidador
     * @return \Illuminate\Http\Response
     */
    public function show(Cuidador $cuidador)
    {
        return new CuidadorResource($cuidador);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuidador  $cuidador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuidador $cuidador)
    {
        $cuidadorData = json_decode($request->getContent(), true);
        $cuidadorData['data']['attributes']['id'] = $cuidadorData['data']['id'];
        $resultado = $cuidador->update($cuidadorData['data']['attributes']);

        return new CuidadorResource($cuidador);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuidador  $cuidador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuidador $cuidador)
    {
        $cuidador->delete();
    }
}
