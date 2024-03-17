<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobroController;


//Ruta inicial
Route::get('/', function () {
    return view('welcome');
});
Route::get('/prueba', function () {
    return view('tabla_items/items');
});


//Rutas para vistas {Cobrar, Ordenes}
Route::controller(CobroController::class)->group(function () {
    Route::get('cobrar', 'showCobrar')->name('vista.cobrar');
});