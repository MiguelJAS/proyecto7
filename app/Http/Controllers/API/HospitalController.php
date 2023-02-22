<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\HospitalResource;

class HospitalController extends Controller
{
    public function index()
    {
// Inicialmente, vamos a utilizar un autor constante
    $municipio = $request->input('filter') ? $request->input('filter')['q'] : 'Murcia';


// La key la cogeremos de las variables de entorno
    $urlHospitalesAPI = "https://datosabiertos.regiondemurcia.es/catalogo/api/action//datastore_search_sql?
    sql=SELECT%20*%20from%20%228c7c36a0-98f6-4fc1-817a-0887ad292ab8%22%20";

    $queryString = "WHERE%20%22Municipio%22%20LIKE%20%27%\"$municipio\"%27";
    $urlConsulta = $urlHospitalesAPI . $queryString;
    // Consultamos a la API
    $response = Http::get($urlConsulta);
    $decodificado = json_decode($response);
    $records = $decodificado[2];

    return HospitalResource::collection($response->collect()->toArray()['items']);
    }
}
