<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class EmpleadosController extends Controller
{
    // Mostrar vista Proveedores
    public function showEmpleados(){

        // Obtener empleados
        $empleados = DB::table('users')->get();

        return view('tabla_empleados/empleados', 
        ['empleados' => $empleados]);
    }

    // Mostrar vista Agregar empleado
    public function showAgregarEmpleado(){
        return view('tabla_empleados/empleados_agregar');
    }

    // Guardar empleado en BD
    public function storeEmpleado(Request $request){
        try{
            // Obtener los datos del formulario
            $nombre = $request->input('nombre');
            $email = $request->input('email');
            $password = $request->input('password');
            $rol = $request->input('rol');

            // Crear registro
            User::create([
                'nombre' => $nombre, 
                'email' => $email, 
                'password' => $password,  
                'rol' => $rol, 
            ]);
            return redirect()->back()->with('success', 'Empleado agregado');
        } catch(\Exception $e){
                return redirect()->back()->with('error', 'Hubo un error');
            }
    }

    // Mostrar vista Editar empleado
    public function showEditarEmpleado($id){
        
        $empleado = User::find($id);
        return view('tabla_empleados/empleados_editar',[
            'empleado' => $empleado
        ]);
    }

     // Actualizar empleado en BD
    public function updateEmpleado(Request $request, $id){

        try{
            // Encontrar empleado en tabla
            $empleado = User::find($id);

            // Tomar los nuevos valores
            $nuevoNombre = $request->input('nombre');
            $nuevoEmail = $request->input('email');
            $nuevoPassword= $request->input('password');
            $nuevoRol = $request->input('rol');

            // Asginarlos al empleado
            $empleado->nombre = $nuevoNombre;
            $empleado->email = $nuevoEmail;
            $empleado->password = $nuevoPassword;
            $empleado->rol = $nuevoRol;

            // Realizar actualizacion
            $empleado->save();

            return redirect()->back()->with('success', 'Empleado modificado');
        } catch(\Exception $e){
            return redirect()->back()->with('error', 'Hubo un error');
        }
              
    }

    // Mostrar vista Info Empleado
    public function showInfoEmpleado($id){
        
        // Buscar empleado en BD
        $empleado = User::find($id);
        
        return view('tabla_empleados/empleados_info',[
            'empleado' => $empleado
        ]);
    }
    
    // Eliminar empleado de BD
    public function deleteEmpleado($id){ 
        try{
            // Buscar empleado en BD
            $empleado = User::find($id);

            // Eliminar empleado
            $empleado->delete();

            return redirect()->route('show.empleados')->with('success', 'Empleado eliminado');
        }catch(\Exception $e){
            return redirect()->back()->with('error','Hubo un error');
            }
    }
}       
