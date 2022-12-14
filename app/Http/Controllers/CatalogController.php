<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getIndex(){
        $cuidadores = self::$arrayCuidadores;
        return view('productos.index', array('arrayCuidadores'=>$cuidadores));
    }

    public function getShow($id)
    {
        return view('productos.show', array('cuidador'=>self::$arrayCuidadores[$id], 'id'=>$id));
    }
    public function getCreate(){
        return view('productos.create');
    }
    public function getEdit($id)
    {
        return view('productos.edit', array('cuidador'=>self::$arrayCuidadores[$id], 'id'=>$id));
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
