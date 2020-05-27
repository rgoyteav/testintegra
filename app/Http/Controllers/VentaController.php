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
use App\Cliente;
use App\Usuario;
use App\Venta;
use App\DetalleVenta;

class VentaController extends Controller
{
    //
    public function index()
    {
        $ventas = Venta::all();
        return view('ventas.lista')->with(compact('ventas'));
    }

    public function create()
    {
        $ventas = Venta::all();
        return view('ventas.form');
    }

    public function store(Request $request)
    { 
        DB::beginTransaction();
        
        try {
            $ventas = Venta::saveData($request);

        } catch (\Exception $e) {
            DB::rollBack();
            //alert()->flash($e->getMessage(), 'warning', ['text' => 'Error intenta nuevamente.']);
            return redirect()->back()->withInput();
        }

        DB::commit();
        //alert()->flash('Registro Exitoso!', 'success', ['text' => 'El nuevo cliente ha sido registrado con éxito.']);

        return redirect()->route('detalleventas.index');
    }
}
