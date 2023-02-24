<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cuidador;
use Illuminate\Http\Request;
use App\Http\Resources\CuidadorResource;

class CuidadorController extends Controller
{
        /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Cuidador::class, 'cuidador');
    }

    public function index(Request $request)
        {
            $numElementos = $request->input('numElements');

            $registros = searchByField(array('nombre', 'apellidos', 'dni', 'telefono', 'email', 'Domicilio', 'Comunidad'), Cuidador::class);

            return CuidadorResource::collection($registros->paginate($numElementos));
           }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Recupero el usuario
        $user = auth()->user();
        $input = json_decode($request->getContent(), true);

        //Si la id del usuario es 1(que pertenece al usuario administrador) hacemos un create normal
        if($user->id == 1){

        $cuidador = Cuidador::create($input['data']['attributes']);
        //Sin embargo, si el usuario no es el administrador, al crear un cuidador, se le asignará como usuario
        //los datos del usuario autenticado. Esto evita que los usuarios normales puedan crear cuidadores asociados a otros usuarios.
        //El resto de métodos quedarán protegidos por una policy.

        }else{

         $cuidador = new Cuidador([
            'nombre' => $input['data']['attributes']['nombre'],
            'apellidos' => $input['data']['attributes']['apellidos'],
            'dni' => $input['data']['attributes']['dni'],
            'telefono' => $input['data']['attributes']['telefono'],
            'email' => $input['data']['attributes']['email'],
            'Domicilio' => $input['data']['attributes']['Domicilio'],
            'Comunidad' =>$input['data']['attributes']['Comunidad'],
            'user_id' => $request->user()->id,
            'user' => $request->user()->user
         ]);
         $cuidador->save();
        }

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
