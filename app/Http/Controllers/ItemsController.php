<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Items;

class ItemsController extends Controller
{
    // Mostrar vista Proveedores
    public function showItems(){

        // Obtener items
        $items = DB::table('items')->get();

        return view('tabla_items/items', 
        ['items' => $items]);
    }

    // Mostrar vista Agregar item
    public function showAgregarItem(){
        return view('tabla_items/items_agregar');
    }

    // Guardar item en BD
    public function storeItem(Request $request){
        try{
            // Obtener los datos del formulario
            $nombre = $request->input('nombre');
            $precio = $request->input('precio');
            $categoria = $request->input('categoria');
            $productos = $request->input('productos');

            // Crear registro
            Items::create([
                'Nombre' => $nombre, 
                'Precio' => $precio, 
                'Categoria' => $categoria,  
                'Productos' => $productos, 
            ]);
            return redirect()->back()->with('success', 'Item agregado');
        } catch(\Exception $e){
                return redirect()->back()->with('error', 'Hubo un error');
            }
    }

    // Mostrar vista Editar item
    public function showEditarItem($id){
        
        $item = Items::find($id);
        return view('tabla_items/items_editar',[
            'item' => $item
        ]);
    }

     // Actualizar item en BD
    public function updateItem(Request $request, $id){

        try{
            // Encontrar item en tabla
            $item = Items::find($id);

            // Tomar los nuevos valores
            $nuevoNombre = $request->input('nombre');
            $nuevoPrecio = $request->input('precio');
            $nuevoCategoria = $request->input('categoria');
            $nuevoProductos = $request->input('productos');

            // Asginarlos al item
            $item->Nombre = $nuevoNombre;
            $item->Precio = $nuevoPrecio;
            $item->Categoria = $nuevoCategoria;
            $item->Productos = $nuevoProductos;

            // Realizar actualizacion
            $item->save();

            return redirect()->back()->with('success', 'Item modificado');
        } catch(\Exception $e){
            return redirect()->back()->with('error', 'Hubo un error');
        }
              
    }

    // Mostrar vista Info producto
    public function showInfoItem($id){
        
        // Buscar item en BD
        $item = Items::find($id);
        
        return view('tabla_items/items_info',[
            'item' => $item
        ]);
    }
    
    // Eliminar item de BD
    public function deleteItem($id){ 
        try{
            // Buscar item en BD
            $item = Items::find($id);

            // Eliminar item
            $item->delete();

            return redirect()->route('show.items')->with('success', 'Item eliminado');
        }catch(\Exception $e){
            return redirect()->back()->with('error','Hubo un error');
            }
    }
}
