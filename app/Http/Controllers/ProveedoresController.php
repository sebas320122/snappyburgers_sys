<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proveedores;

class ProveedoresController extends Controller
{
    // Mostrar vista Proveedores
    public function showProveedores(){

        // Obtener solicitudes
        $solicitudes = DB::table('proveedores')
        ->latest()
        ->get();

        return view('tabla_proveedores/proveedores', 
        ['solicitudes' => $solicitudes]);
    }

    // Mostrar vista Agregar solicitud
    public function showAgregarSolicitud(){
        return view('tabla_proveedores/proveedores_agregar');
    }

    // Guardar solicitud en BD
    public function storeSolicitud(Request $request){
        try{
            // Obtener los datos del formulario
            $proveedor = $request->input('proveedor');
            $producto = $request->input('producto');
            $cantidad = $request->input('cantidad');
            $costo = $request->input('costo');
            $estado = $request->input('estado');
            $fecha_estimada = $request->input('fecha_estimada');
            $fecha_entrega = $request->input('fecha_entrega');

            // Crear registro
            Proveedores::create([
                'Proveedor' => $proveedor, 
                'Producto' => $producto, 
                'Cantidad' => $cantidad,  
                'Costo' => $costo, 
                'Estado' => $estado, 
                'Fecha_estimada' => $fecha_estimada, 
                'Fecha_entrega' => $fecha_entrega, 
            ]);
            return redirect()->back()->with('success', 'Solicitud agregada');
        } catch(\Exception $e){
                return redirect()->back()->with('error', 'Hubo un error');
            }
    }

    // Mostrar vista Editar solicitud
    public function showEditarSolicitud($id){
        
        $solicitud = Proveedores::find($id);
        return view('tabla_proveedores/proveedores_editar',[
            'solicitud' => $solicitud
        ]);
    }

     // Actualizar solicitud en BD
    public function updateSolicitud(Request $request, $id){
       
            // Encontrar solicitud en tabla
            $solicitud = Proveedores::find($id);

            // Tomar los nuevos valores
            $nuevoProveedor = $request->input('proveedor');
            $nuevoProducto = $request->input('producto');
            $nuevoCantidad = $request->input('cantidad');
            $nuevoCosto = $request->input('costo');
            $nuevoEstado = $request->input('estado');
            $nuevoFecha_estimada = $request->input('fecha_estimada');
            $nuevoFecha_entrega = $request->input('fecha_entrega');


            // Asginarlos a la solicitud
            $solicitud->Proveedor = $nuevoProveedor;
            $solicitud->Producto = $nuevoProducto;
            $solicitud->Cantidad = $nuevoCantidad;
            $solicitud->Costo = $nuevoCosto;
            $solicitud->Estado = $nuevoEstado;
            $solicitud->Fecha_estimada = $nuevoFecha_estimada;
            $solicitud->Fecha_entrega = $nuevoFecha_entrega;

            // Realizar actualizacion
            $solicitud->save();

            return redirect()->back()->with('success', 'Solicitud modificada');  
    }

    // Mostrar vista Info producto
    public function showInfoSolicitud($id){
        
        // Buscar solicitud en BD
        $solicitud = Proveedores::find($id);
        
        return view('tabla_proveedores/proveedores_info',[
            'solicitud' => $solicitud
        ]);
    }
    
    // Eliminar solicitud de BD
    public function deleteSolicitud($id){ 
        try{
            // Buscar solicitud en BD
            $solicitud = Proveedores::find($id);

            // Eliminar solicitud
            $solicitud->delete();

            return redirect()->route('show.proveedores')->with('success', 'Solicitud eliminada');
        }catch(\Exception $e){
            return redirect()->back()->with('error','Hubo un error');
            }
    }

}
