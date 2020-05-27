<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests\StoreClient;
use App\Http\Requests\UpdateClient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\CollectionDataTable;
use App\Producto;
use App\Proveedor;

class ProductoController extends Controller
{
    //
    public function index()
    {
        $productos = Producto::all();
        $proveedores = Proveedor::all();
        return view('productos.lista')->with(compact('productos', 'proveedores'));
    }

    public function create()
    {
        $productos = Producto::all();
        return view('productos.form');
    }

    public function store(Request $request)
    { 
        DB::beginTransaction();
        
        try {
            $productos = Producto::saveData($request);

        } catch (\Exception $e) {
            DB::rollBack();
            //alert()->flash($e->getMessage(), 'warning', ['text' => 'Error intenta nuevamente.']);
            return redirect()->back()->withInput();
        }

        DB::commit();
        //alert()->flash('Registro Exitoso!', 'success', ['text' => 'El nuevo cliente ha sido registrado con éxito.']);

        return redirect()->route('productos.index');
    }

    public function obtenerProveedores()
    { 
        DB::beginTransaction();
        
        try {
            $proveedores = DB::table('proveedores')->select('nombre')->get();

        } catch (\Exception $e) {
            DB::rollBack();
            //alert()->flash($e->getMessage(), 'warning', ['text' => 'Error intenta nuevamente.']);
            return redirect()->back()->withInput();
        }

        DB::commit();
        //alert()->flash('Registro Exitoso!', 'success', ['text' => 'El nuevo cliente ha sido registrado con éxito.']);

        return json_encode($proveedores);
    }

    public function obtenerNombreProveedores(Request $request)
    { 
        DB::beginTransaction();
        $id2 = $request->id;
        try {
        	$proveedores = Proveedor::select('nombre')->where('id', $id2)->get();
            //$proveedores = DB::table('proveedores')->select('nombre')->where('id', '=', $id2)->get();

        } catch (\Exception $e) {
            DB::rollBack();
            //alert()->flash($e->getMessage(), 'warning', ['text' => 'Error intenta nuevamente.']);
            return redirect()->back()->withInput();
        }

        DB::commit();
        //alert()->flash('Registro Exitoso!', 'success', ['text' => 'El nuevo cliente ha sido registrado con éxito.']);

        return json_encode($proveedores);
    }

}
