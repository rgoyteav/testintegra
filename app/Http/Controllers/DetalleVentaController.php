<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\VentaController;

use App\Http\Requests\StoreClient;
use App\Http\Requests\UpdateClient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\CollectionDataTable;
use App\Producto;
use App\Cliente;
use App\Usuario;
use App\Venta;
use App\DetalleVenta;

class DetalleVentaController extends Controller
{
    //
    public function index()
    {
        $detalleVentas = DetalleVenta::all();
        return view('detalleVentas.lista')->with(compact('detalleVentas'));
    }

    public function create()
    {
        $detalleVentas = DetalleVenta::all();
        return view('detalleVentas.form');
    }

    public function store(Request $request)
    { 
        DB::beginTransaction();
        
        try {
            $detalleVentas = DetalleVenta::saveData($request);

        } catch (\Exception $e) {
            DB::rollBack();
            //alert()->flash($e->getMessage(), 'warning', ['text' => 'Error intenta nuevamente.']);
            return redirect()->back()->withInput();
        }

        DB::commit();
        //alert()->flash('Registro Exitoso!', 'success', ['text' => 'El nuevo cliente ha sido registrado con éxito.']);

        return redirect()->route('detalleVentas.index');
    }

    public function obtenerClientes()
    { 
        DB::beginTransaction();
        
        try {
            $clientes = DB::table('clientes')->select('nombre')->get();

        } catch (\Exception $e) {
            DB::rollBack();
            alert()->flash($e->getMessage(), 'warning', ['text' => 'Error intenta nuevamente.']);
            return redirect()->back()->withInput();
        }

        DB::commit();
        //alert()->flash('Registro Exitoso!', 'success', ['text' => 'El nuevo cliente ha sido registrado con éxito.']);

        return json_encode($clientes);
    }

    public function obtenerEmpleados()
    { 
        DB::beginTransaction();
        
        try {
            $empleados = DB::table('usuarios')->select('nombre')->where('rol', 'Empleado')->get();

        } catch (\Exception $e) {
            DB::rollBack();
            //alert()->flash($e->getMessage(), 'warning', ['text' => 'Error intenta nuevamente.']);
            return redirect()->back()->withInput();
        }

        DB::commit();
        //alert()->flash('Registro Exitoso!', 'success', ['text' => 'El nuevo cliente ha sido registrado con éxito.']);

        return json_encode($empleados);
    }

    public function obtenerProductos()
    { 
        DB::beginTransaction();
        
        try {
            $productos = DB::table('productos')->select('nombre')->get();

        } catch (\Exception $e) {
            DB::rollBack();
            //alert()->flash($e->getMessage(), 'warning', ['text' => 'Error intenta nuevamente.']);
            return redirect()->back()->withInput();
        }

        DB::commit();
        //alert()->flash('Registro Exitoso!', 'success', ['text' => 'El nuevo cliente ha sido registrado con éxito.']);

        return json_encode($productos);
    }

    public function obtenerPrecioProducto()
    { 
        DB::beginTransaction();
        
        try {
            $productos = DB::table('productos')->select('precio')->get();

        } catch (\Exception $e) {
            DB::rollBack();
            //alert()->flash($e->getMessage(), 'warning', ['text' => 'Error intenta nuevamente.']);
            return redirect()->back()->withInput();
        }

        DB::commit();
        //alert()->flash('Registro Exitoso!', 'success', ['text' => 'El nuevo cliente ha sido registrado con éxito.']);

        //return json_encode($productos);
        return json_encode($productos);
    }

    public function obtenerIdVenta()
    { 
        DB::beginTransaction();
        
        try {
            $venta = DB::table('ventas')->select('id')->orderBy('id','DESC')->first();

        } catch (\Exception $e) {
            DB::rollBack();
            //alert()->flash($e->getMessage(), 'warning', ['text' => 'Error intenta nuevamente.']);
            return redirect()->back()->withInput();
        }

        DB::commit();
        //alert()->flash('Registro Exitoso!', 'success', ['text' => 'El nuevo cliente ha sido registrado con éxito.']);

        //return json_encode($productos);
        return json_encode($venta);
    }
}
