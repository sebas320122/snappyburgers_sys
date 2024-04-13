<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cobros;
use App\Models\Ordenes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CobroController extends Controller
{
    // Mostrar vista cobrar
    public function showCobrar(){

        // Obtener items del menu
        $itemsMenu = DB::table('items')->get();

        return view('cobrar', 
        ['itemsMenu' => $itemsMenu]);
    }

    // Registrar cobro en vista Cobrar
    public function storeCobros(Request $request){

        //Validar datos del formulario
        $request->validate([
            'mesa' => 'required',
            'cantidad' => 'required|array',
            'item' => 'required|array',
            'precio' => 'required|array',
        ]);

        //Crear una nueva orden
        $orden = Ordenes::create([
        'Total' => 0, 
        'Mesa' => $request->input('mesa'),
        'Estado' => "Anotado", 
        'Empleado_creo' => Auth::user()->nombre,
        ]);

        // Obtener los datos del formulario
        $cantidades = $request->input('cantidad');
        $items = $request->input('item');
        $precios = $request->input('precio');
        $mesa = $request->input('mesa');
        
        //Realizar el registro de cobros asociados a la orden en BD
        foreach ($cantidades as $key => $cantidad) {
            $precio = $precios[$key] * $cantidad;

            $orden->cobros()->create([
                'Item' => $items[$key],
                'Cantidad' => $cantidad,
                'Precio' => $precio,
                'Mesa' => $mesa,
                'Estado' => "Anotado",
            ]);
            $orden->total += $precio;
        }
        $orden->save();

        //Obtener el orden_id para pasarlo a showTicket
        $order_id = $orden->id;

        return redirect()->route('show.ticket', ['order_id' => $order_id]);
    }

    // Mostrar vista Cobrar_ticket
    public function showTicket($order_id){

        // Obtener orden
        $orden = Cobros::where('Orden_id',$order_id)->get();

        return view('cobrar_ticket', [
            'orden' => $orden,
            'order_id' =>$order_id,
            'total' => $orden->sum('Precio')
        ]);
    }

    // Actualizar orden
    public function updateOrden(Request $request, $order_id){

        // Obtener el estado seleccionado
        $nuevoEstado = $request->estado_orden;

        // Actualizar el estado en la tabla de cobros y ordenes
        Cobros::where('Orden_id', $order_id)->update(['Estado' => $nuevoEstado]);
        Ordenes::where('id', $order_id)->update([
            'Estado' => $nuevoEstado,
            'Empleado_actualizo' => Auth::user()->nombre
        ]);

        return redirect()->route('show.cobrar');
    }

    // Mostrar vista Ordenes
    public function showOrdenes(){

        // Obtener todas las órdenes con estado "Confirmar"
        $ordenes = Ordenes::where('Estado', 'Confirmar')->get();

        // Pasar las órdenes a la vista
        return view('ordenes', ['ordenes' => $ordenes]);
    }

    // Actualizar oden 
    public function updateOrdenconf(Request $request){

        $order_id = $request->input('order_id');

        // Obtener el estado seleccionado
        $nuevoEstado = "Preparado";

        // Actualizar el estado en la tabla de cobros y ordenes
        Cobros::where('Orden_id', $order_id )->update(['Estado' => $nuevoEstado]);
        Ordenes::where('id', $order_id)->update([
            'Estado' => $nuevoEstado
        ]);

        return redirect()->back();
    }

}
