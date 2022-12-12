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
    return view('login');
});

Route::get('logout', function () {
    return 'Sesion cerrada correctamente';
});

Route::get('productos', function () {
    return view('productos');
});

Route::get('productos/show/{id}', function ($id) {
    return view('productos.show', array('id => $id'));
});

Route::get('productos/create/{id}', function () {
    return view('productos.create');
});

Route::get('productos/edit/{id}', function ($id) {
    return view('productos.edit', array('id => $id'));
});







