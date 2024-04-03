<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Disponibilidad;

class DisponibilidadController extends Controller
{
    // Mostrar vista Disponibilidad
    public function showDisponibilidad(){

        // Obtener productos
        $productos = DB::table('disponibilidad')->get();

        return view('tabla_disponibilidad/disponibilidad', 
        ['productos' => $productos]);
    }

    // Mostrar vista Agregar producto
    public function showAgregarProducto(){
        return view('tabla_disponibilidad/disponibilidad_agregar');
    }

    // Guardar producto en BD
    public function storeProducto(Request $request){
        try{
            // Obtener los datos del formulario
            $producto = $request->input('producto');
            $existencia = $request->input('existencia');
            $capacidad = $request->input('capacidad');
            $porcentaje = round(($existencia/$capacidad)*100);

            // Crear registro
            Disponibilidad::create([
                'Producto' => $producto, 
                'Existencia' => $existencia, 
                'Capacidad' => $capacidad,  
                'Porcentaje' => $porcentaje, 
            ]);
            return redirect()->back()->with('success', 'Producto agregado');
        } catch(\Exception $e){
                return redirect()->back()->with('error', 'Hubo un error');
            }
        

    
    }

    // Mostrar vista editar producto
    public function showEditarProducto($id){
        
        // Buscar producto en BD
        $producto = Disponibilidad::find($id);

        return view('tabla_disponibilidad/disponibilidad_editar',[
            'producto' => $producto
        ]);
    }

    // Actualizar producto en BD
    public function updateProducto(Request $request, $id){
       
            // Buscar producto en BD
            $producto = Disponibilidad::find($id);

            // Tomar los nuevos valores
            $nuevoProducto = $request->input('producto');
            $nuevoExistencia = $request->input('existencia');
            $nuevoCapacidad = $request->input('capacidad');
            $nuevoPorcentaje = round(($nuevoExistencia/$nuevoCapacidad)*100);

            // Asginarlos al producto
            $producto->Producto = $nuevoProducto;
            $producto->Existencia = $nuevoExistencia;
            $producto->Capacidad = $nuevoCapacidad;
            $producto->Porcentaje = $nuevoPorcentaje;

            // Realizar actualizacion
            $producto->save();

            return redirect()->back()->with('success', 'Producto modificado');  
    }

    // Mostrar vista Info producto
    public function showInfoProducto($id){
        
        // Buscar producto en BD
        $producto = Disponibilidad::find($id);

        return view('tabla_disponibilidad/disponibilidad_info',[
            'producto' => $producto
        ]);
    }
    
    // Eliminar producto de BD
    public function deleteProducto($id){ 
        try{
            // Buscar producto en BD
            $producto = Disponibilidad::find($id);

            // Eliminar producto
            $producto->delete();
            
            return redirect()->route('show.disponibilidad')->with('success', 'Producto eliminado');
        }catch(\Exception $e){
            return redirect()->back()->with('error','Hubo un error');
            }
    }


}
