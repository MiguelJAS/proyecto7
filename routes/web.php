<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {
    return view('contact');
});

Route::get('logout', function () {
    return view('Logout usuario');
});

Route::get('productos', function () {
    return view('productos');
});

Route::get('productos/show/{id}', function () {
    return view(`Vista detalle producto {id}`);
});

Route::get('producto/create', function () {
    return view(`Añadir producto`);
});

Route::get('productos/edit/{id}', function () {
    return view(`Modificar producto {id}`);
});







