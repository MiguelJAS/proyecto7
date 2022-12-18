<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;


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
    return view('welcome');
});

Route::get('/', [HomeController::class,'getHome']);

Route::prefix('productos')->group(function(){

    Route::get('/', [CatalogController::class,'getIndex']);
    Route::get('/show/{id}',[CatalogController::class,'getShow'])->middleware(['auth']);
    Route::get('/edit/{id}', [CatalogController::class,'getEdit'])->middleware(['auth']);
    Route::get('/create', [CatalogController::class,'getCreate'])->middleware(['auth']);
});

Route::post('productos/create', [CatalogController::class,'store']);
Route::put('productos/edit/{id}', [CatalogController::class,'putStore']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
