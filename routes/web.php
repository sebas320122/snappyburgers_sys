<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobroController;
use App\Http\Controllers\DisponibilidadController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\IngresosController;

//Ruta inicial
Route::get('/', function () {
    return view('welcome');
});

//Rutas para vistas (Cobrar, Ticket, Ordenes)
Route::controller(CobroController::class)->group(function () {
    Route::get('cobrar', 'showCobrar')->name('show.cobrar');
    Route::post('cobrar', 'storeCobros')->name('store.cobros');

    Route::get('ticket/{order_id}', 'showTicket')->name('show.ticket');
    Route::post('ticket/{order_id}', 'updateOrden')->name('update.orden');

    Route::get('ordenes', 'showOrdenes')->name('show.ordenes');
    Route::post('ordenes', 'updateOrdenconf')->name('update.ordenconf');
});

//Rutas para vista Disponibilidad
Route::controller(DisponibilidadController::class)->group(function () {
    Route::get('disponibilidad', 'showDisponibilidad')->name('show.disponibilidad');

    Route::get('disponibilidad/info/{id}', 'showInfoProducto')->name('show.info_producto');
    Route::delete('disponibilidad/info/{id}', 'deleteProducto')->name('delete.producto');
    
    Route::get('disponibilidad/agregar', 'showAgregarProducto')->name('show.agregar_producto');
    Route::post('disponibilidad/agregar', 'storeProducto')->name('store.producto');

    Route::get('disponibilidad/editar/{id}', 'showEditarProducto')->name('show.editar_producto');
    Route::put('configuracion/editar/{id}', 'updateProducto')->name('update.producto');
    
});

//Rutas para vista Proveedores
Route::controller(ProveedoresController::class)->group(function () {
    Route::get('proveedores', 'showProveedores')->name('show.proveedores');

    Route::get('proveedores/info/{id}', 'showInfoSolicitud')->name('show.info_solicitud');
    Route::delete('proveedores/info/{id}', 'deleteSolicitud')->name('delete.solicitud');

    Route::get('proveedores/agregar', 'showAgregarSolicitud')->name('show.agregar_solicitud');
    Route::post('proveedores/agregar', 'storeSolicitud')->name('store.solicitud');

    Route::get('proveedores/editar/{id}', 'showEditarSolicitud')->name('show.editar_solicitud');
    Route::put('proveedores/editar/{id}', 'updateSolicitud')->name('update.solicitud');
    
});

//Rutas para vista Items
Route::controller(ItemsController::class)->group(function () {
    Route::get('items', 'showItems')->name('show.items');

    Route::get('items/agregar', 'showAgregarItem')->name('show.agregar_item');
    Route::post('items/agregar', 'storeItem')->name('store.item');

    Route::get('items/info/{id}', 'showInfoItem')->name('show.info_item');
    Route::delete('items/info/{id}', 'deleteItem')->name('delete.item');

    Route::get('items/editar/{id}', 'showEditarItem')->name('show.editar_item');
    Route::put('items/editar/{id}', 'updateItem')->name('update.item');
    
});

//Rutas para vista Ingresos
Route::controller(IngresosController::class)->group(function () {
    Route::get('ingresos', 'showIngresos')->name('show.ingresos');

    Route::get('ingresos/ventas', 'showVentas')->name('show.ventas');
    Route::get('ingresos/ventas/info/{id}', 'showInfoVenta')->name('show.info_venta');

    Route::get('ingresos/gastos', 'showGastos')->name('show.gastos');
    Route::get('ingresos/gastos/info/{id}', 'showInfoGasto')->name('show.info_gasto');
});