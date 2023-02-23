<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Http\Resources\HospitalResource;

class HospitalController extends Controller
{
    public function index(Request $request)
    {
// Inicialmente, vamos a utilizar un autor constante
    $datos = $request->input('filter') ? $request->input('filter')['q'] : '';
    $municipio = preg_replace('([^A-Za-z0-9])', '', $datos);

    //$query_string = http_build_query([
    //    'sql' => "SELECT * from '8c7c36a0-98f6-4fc1-817a-0887ad292ab8' WHERE 'Municipio' LIKE '%".$municipio."%'"
    //]);

    //$urlHospitalesAPI="https://datosabiertos.regiondemurcia.es/catalogo/api/action//datastore_search_sql?" . $query_string;

    $urlHospitalesAPI="https://datosabiertos.regiondemurcia.es/catalogo/api/action//datastore_search_sql?sql=SELECT%20*%20from%20%228c7c36a0-98f6-4fc1-817a-0887ad292ab8%22%20WHERE%20%22Municipio%22%20LIKE%20%27%".$municipio."%%27";

    // Consultamos a la API
    $response = Http::get($urlHospitalesAPI);
    $decodificado = json_decode($response, true);
    $results = $decodificado['result']['records'];
    //return HospitalResource::collection($decodificado->collect()->toArray()['items']);

    return HospitalResource::collection($results);
    }
}
