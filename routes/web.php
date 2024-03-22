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
    Route::get('cobrar', 'showCobrar')->name('show.cobrar');
    Route::post('cobrar', 'storeCobros')->name('store.cobros');

    Route::get('ticket/{order_id}', 'showTicket')->name('show.ticket');
    Route::post('ticket/{order_id}', 'updateOrden')->name('update.orden');

    Route::get('ordenes', 'showOrdenes')->name('show.ordenes');
    Route::post('ordenes', 'updateOrdenconf')->name('update.ordenconf');
});