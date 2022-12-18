<?php

namespace App\Http\Controllers;

use App\Models\Cuidador;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getIndex(){
        $cuidadores = Cuidador::all();
        return view('productos.index', array('arrayCuidadores'=>$cuidadores));
    }

    public function getShow($id)
    {
        $cuidador = Cuidador::findOrFail($id);
        return view('productos.show', array('cuidador'=>$cuidador, 'id'=>$id));
    }

    public function getCreate()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        //Cuidador es el modelo.
        $registroNuevo = new Cuidador();
        //el primer title hace referencia a la columna de la tabla. El entrecomillado('title') hace referencia al name del formulario
        $registroNuevo->nombre =$request->input('nombre');
        $registroNuevo->apellidos =$request->input('apellidos');
        $registroNuevo->dni =$request->input('dni');
        $registroNuevo->telefono =$request->input('telefono');
        $registroNuevo->email =$request->input('email');
        $registroNuevo->Domicilio =$request->input('domicilio');
        $registroNuevo->Comunidad =$request->input('comunidad');
        $registroNuevo->Localidad =$request->input('localidad');

        $registroNuevo->save();
        //Cuando hacemos el save, aunque no hemos introducido una id, se le asigna una id normalmente.
        $url = action([CatalogController::class,'getShow'],['id' => $registroNuevo->id]);
        return redirect($url);
    }

    public function getEdit($id)
    {
        $cuidador = Cuidador::findOrFail($id);
        return view('productos.edit', array('cuidador'=>$cuidador, 'id'=>$id));
    }

    public function putStore($id,Request $request){

        $cuidador = Cuidador::findOrFail($id);
        $cuidador->nombre =$request->input('nombre');
        $cuidador->apellidos =$request->input('apellidos');
        $cuidador->dni =$request->input('dni');
        $cuidador->telefono =$request->input('telefono');
        $cuidador->email = $request->input('email');
        $cuidador->Domicilio =$request->input('domicilio');
        $cuidador->Comunidad =$request->input('comunidad');
        $cuidador->Localidad =$request->input('localidad');
        $cuidador->save();

        $url=action([CatalogController::class, 'getShow'], ['id' => $cuidador->id]);
        return redirect($url);
    }

private static $arrayCuidadores = array(
		array(
			'nombre' => 'Jaime',
			'apellidos' => 'Lloret García',
            'dni' => '23066836K',
			'telefono' => '606639633',
			'email' => 'holaquetal@gmail.com',
			'domicilio' => 'Calle Sierra de Gredos 51',
			'comunidad' => 'Región de Murcia',
            'localidad' => 'Cartagena'
		),
		array(
			'nombre' => 'Pedro',
			'apellidos' => 'García Yokse',
            'dni' => '12345678K',
			'telefono' => '621554488',
			'email' => 'prueba@gmail.com',
			'domicilio' => 'Calle Sierra de Gredos 54',
			'comunidad' => 'Cataluña',
            'localidad' => 'Tarragona'
		),
		array(
			'nombre' => 'Manuel',
			'apellidos' => 'Tiriri Tororo',
            'dni' => '12343456Q',
			'telefono' => '654345654',
			'email' => 'wtflolequisde@gmail.com',
			'domicilio' => 'nomecuentes tu vida 51',
			'comunidad' => 'Región de Murcia',
            'localidad' => 'Murcia'
		),
		array(
			'nombre' => 'Alba',
			'apellidos' => 'García Vera',
            'dni' => '25422115P',
			'telefono' => '123321123',
			'email' => 'jaja@gmail.com',
			'domicilio' => 'Calle Mulhacén',
			'comunidad' => 'Región de Murcia',
            'localidad' => 'Fuente Álamo'
		)
	);

}
