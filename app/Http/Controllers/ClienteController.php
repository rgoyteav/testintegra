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

use App\Cliente;

use Exception;

class ClienteController extends Controller
{
    //
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.lista')->with(compact('clientes'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('clientes.form');
    }

    public function store(Request $request)
    { 
        if (\App\Cliente::where('dni', $request->dni)->first())
        {
            //alert()->flash('Dni existente', 'warning', ['text' => 'El dni '.$request->dni.' ya se encuentra registrado.']);
            return redirect()->back()->withInput();
        }
        DB::beginTransaction();
        
        try {
            $cliente = Cliente::saveData($request);

        } catch (\Exception $e) {
            DB::rollBack();
            //alert()->flash($e->getMessage(), 'warning', ['text' => 'Error intenta nuevamente.']);
            return redirect()->back()->withInput();
        }

        DB::commit();
        //alert()->flash('Registro Exitoso!', 'success', ['text' => 'El nuevo cliente ha sido registrado con éxito.']);

        return redirect()->route('clientes.index');
    }
}
