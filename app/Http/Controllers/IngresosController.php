<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ordenes;
use App\Models\Proveedores;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class IngresosController extends Controller
{
    // Mostrar vista Ingresos
    public function showIngresos(){

        // Obtener total de ventas del dia actual
        $ventasHoy = DB::table('ordenes')
        ->select(DB::raw('SUM(Total) as sumatoria'))
        ->where('Estado','Preparado')
        ->where(DB::raw('DATE(created_at)'), '=', DB::raw('CURDATE()'))
        ->first();

        // Obtener total de gastos del dia actual
        $gastosHoy = DB::table('proveedores')
        ->select(DB::raw('SUM(Costo) as sumatoria'))
        ->where('Estado','<>','Cancelada')
        ->where(DB::raw('DATE(created_at)'), '=', DB::raw('CURDATE()'))
        ->first();

        // Calcular ganancias del dia actual
        $gananciasHoy= ($ventasHoy->sumatoria) - ($gastosHoy->sumatoria);

        // Obtener total de ventas de los pasados 7 dias
        $ventasPasadas = DB::table('ordenes')
        ->select(DB::raw('SUM(Total) as sumatoria'))
        ->where('Estado','Confirmar')
        ->where(DB::raw('DATE(created_at)'), '>=', DB::raw('CURDATE() - INTERVAL 7 DAY'))
        ->where(DB::raw('DATE(created_at)'), '<', DB::raw('CURDATE()'))
        ->first();

        // Obtener total de gastos de los pasados 7 dias
        $gastosPasados = DB::table('proveedores')
        ->select(DB::raw('SUM(Costo) as sumatoria'))
        ->where('Estado','<>','Cancelada')
        ->where(DB::raw('DATE(created_at)'), '>=', DB::raw('CURDATE() - INTERVAL 7 DAY'))
        ->where(DB::raw('DATE(created_at)'), '<', DB::raw('CURDATE()'))
        ->first();

        // Calcular ganancia de los pasados 7 dias
        $gananciasPasadas= ($ventasPasadas->sumatoria) - ($gastosPasados->sumatoria);


        return view('tabla_ingresos/ingresos', 
        ['gananciasHoy' => $gananciasHoy,
        'gananciasPasadas' => $gananciasPasadas
        ]);
    }

    // Mostrar vista Ventas
    public function showVentas(){

        // Comprobar que el usuario cuenta con autorizacion
        if (! Gate::allows('tablaIngresos',Auth::user())) {
            return redirect()->back()->with('error','No cuentas con permisos para ver las ventas');
        }

        // Obtener ventas del dia actual
        $ventasHoy = DB::table('ordenes')
        ->where('Estado','Preparado')
        ->where(DB::raw('DATE(created_at)'), '=', DB::raw('CURDATE()'))
        ->latest()
        ->get();
        //Obtener total actual
        $ventasHoyTotal = 0;
        foreach ($ventasHoy as $ventaHoy){
            $ventasHoyTotal += $ventaHoy->Total;
        }

        // Obtener ventas de los pasados 7 dias
        $ventasPasadas = DB::table('ordenes')
        ->where('Estado','Preparado')
        ->where(DB::raw('DATE(created_at)'), '>=', DB::raw('CURDATE() - INTERVAL 7 DAY'))
        ->where(DB::raw('DATE(created_at)'), '<', DB::raw('CURDATE()'))
        ->latest()
        ->get();
        //Obtener total de 7 dias
        $ventasPasadasTotal = 0;
        foreach ($ventasPasadas as $ventaPasada){
            $ventasPasadasTotal += $ventaPasada->Total;
        }

        return view('tabla_ingresos/ventas', 
        ['ventasHoy' => $ventasHoy,
        'ventasPasadas' => $ventasPasadas,
        'ventasHoyTotal' => $ventasHoyTotal,
        'ventasPasadasTotal' => $ventasPasadasTotal
        ]);
    }

    // Mostrar vista Info de venta
    public function showInfoVenta($id){
        
        // Comprobar que el usuario cuenta con autorizacion
        if (! Gate::allows('tablaIngresos',Auth::user())) {
            return redirect()->back()->with('error','No cuentas con permisos para ver las ventas');
        }
        
        // Buscar venta en BD
        $venta = Ordenes::find($id);

        return view('tabla_ingresos/ventas_info',[
            'venta' => $venta
        ]);
    }

    // Mostrar vista Gastos
    public function showGastos(){

        // Comprobar que el usuario cuenta con autorizacion
        if (! Gate::allows('tablaIngresos',Auth::user())) {
            return redirect()->back()->with('error','No cuentas con permisos para ver los gastos');
        }

        // Obtener gastos del dia actual
        $gastosHoy = DB::table('proveedores')
        ->where('Estado','<>','Cancelada')
        ->where(DB::raw('DATE(created_at)'), '=', DB::raw('CURDATE()'))
        ->latest()
        ->get();
        //Obtener total actual
        $gastosHoyTotal = 0;
        foreach ($gastosHoy as $gastoHoy){
            $gastosHoyTotal += $gastoHoy->Costo;
        }

        // Obtener gastos de los pasados 7 dias
        $gastosPasados = DB::table('proveedores')
        ->where('Estado','<>','Cancelada')
        ->where(DB::raw('DATE(created_at)'), '>=', DB::raw('CURDATE() - INTERVAL 7 DAY'))
        ->where(DB::raw('DATE(created_at)'), '<', DB::raw('CURDATE()'))
        ->latest()
        ->get();
        //Obtener total de 7 dias
        $gastosPasadosTotal = 0;
        foreach ($gastosPasados as $gastoPasado){
            $gastosPasadosTotal += $gastoPasado->Costo;
        }

        return view('tabla_ingresos/gastos', 
        ['gastosHoy' => $gastosHoy,
        'gastosPasados' => $gastosPasados,
        'gastosHoyTotal' => $gastosHoyTotal,
        'gastosPasadosTotal' => $gastosPasadosTotal
        ]);
    }

    // Mostrar vista Info gasto
    public function showInfoGasto($id){

        // Comprobar que el usuario cuenta con autorizacion
        if (! Gate::allows('tablaIngresos',Auth::user())) {
            return redirect()->back()->with('error','No cuentas con permisos para ver los gastos');
        }
        
        // Buscar gastos en BD
        $gasto = Proveedores::find($id);

        return view('tabla_ingresos/gastos_info',[
            'gasto' => $gasto
        ]);
    }

}
