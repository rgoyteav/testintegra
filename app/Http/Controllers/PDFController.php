<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
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

class PDFController extends Controller
{
    //
    public function generatePDF($id)
    {
    	$clientes = DB::table('ventas')->select('cliente_id', 'total')->where('id', $id);
    	$clientesNombre = DB::table('ventas')
    					  ->join('clientes', 'ventas.cliente_id','=','clientes.id')
    					  ->select('ventas.total','clientes.nombre', 'clientes.apellido')
    					  ->where('ventas.id', $id)
    					  ->get();
    	$usuario_id = DB::table('ventas')->select('usuario_id')->where('id', $id)->get();
    	$usuarioNombre = DB::table('ventas')
    					  ->join('usuarios', 'ventas.usuario_id','=','usuarios.id')
    					  ->select('usuarios.nombre', 'usuarios.apellido')
    					  ->where('ventas.id', $id)
    					  ->get();
    	$detalleVenta = DB::table('ventas')
    					  ->join('detalleventa','ventas.id','=','detalleventa.venta_id')
    					  ->join('productos', 'productos.id', '=', 'detalleventa.producto_id')
    					  ->select('productos.nombre','detalleventa.id','detalleventa.producto_id','detalleventa.precio_unitario','detalleventa.cantidad','detalleventa.subtotal')
    					  ->where('detalleventa.venta_id',$id)
    					  ->get();
        $data = [
        	'title' => 'Test de programación',
        	'id' => $id,
        	'clientes' => $clientes,
        	'clientesNombre' => $clientesNombre,
        	'usuarios' => $usuario_id,
        	'usuarioNombre' => $usuarioNombre,
        	'detalleventa' => $detalleVenta
        	];
        $pdf = PDF::loadView('pdf.factura', $data);

        return $pdf->download('factura.pdf');
    }
}
