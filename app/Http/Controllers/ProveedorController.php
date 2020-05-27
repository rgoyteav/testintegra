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
use App\Proveedor;

class ProveedorController extends Controller
{
    //
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.lista')->with(compact('proveedores'));
    }
    
    public function create()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.form');
    }

    public function store(Request $request)
    { 
        DB::beginTransaction();
        
        try {
            $proveedor = Proveedor::saveData($request);

        } catch (\Exception $e) {
            DB::rollBack();
            //alert()->flash($e->getMessage(), 'warning', ['text' => 'Error intenta nuevamente.']);
            return redirect()->back()->withInput();
        }

        DB::commit();
        //alert()->flash('Registro Exitoso!', 'success', ['text' => 'El nuevo cliente ha sido registrado con éxito.']);

        return redirect()->route('proveedores.index');
    }
}
