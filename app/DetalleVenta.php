<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

use App\Venta;

class DetalleVenta extends Model
{
    //
    protected $table = 'detalleventa';

    public function venta ()
	{
		return $this->hasMany('App\Venta'); // una venta tiene detalles de venta
	}

	public function producto ()
	{
		return $this->belongsTo('App\Producto'); // un detalle de venta tiene varios productos
	}

	public static function saveData ($request)
	{
        try {

            //dd($request);
            
            /**
                Almacenamos datos de venta
            */
            $productos = $request['producto_id'];
            $cantidades = $request['cantidad'];
            $precios = $request['precio_unitario'];
            $subtotales = $request['subtotal'];

				//echo "<br> Cerveza " . $i . ": " . $cervezas[$i]; 
				/*$detalleVenta->venta_id = 43;
				$detalleVenta->producto_id = $productos[$i];    */
			for ($i=0; $i < count($productos); $i++) { 
				# code...
				$detalleVenta = new self(); //creo un nuevo objeto
				$detalleVenta->venta_id = $request['venta_id'];
            	$detalleVenta->producto_id = $productos[$i];
            	$detalleVenta->precio_unitario = $precios[$i];
            	$detalleVenta->cantidad = $cantidades[$i];
            	$detalleVenta->subtotal = $subtotales[$i];
            	$detalleVenta->save();
			}
            	/*$detalleVenta->precio_unitario = 2;
            	$detalleVenta->cantidad = 3;
            	$detalleVenta->subtotal = 4;
            	/*$detalleVenta->venta_id = 35;
            	$detalleVenta->producto_id = 1;
            	$detalleVenta->precio_unitario = 2;
            	$detalleVenta->cantidad = 3;
            	$detalleVenta->subtotal = 4;*/
            /*$detalleVenta->precio_unitario = $request['precio_unitario'];*/
            /*$detalleVenta->cantidad = 1;
            /*$detalleVenta->subtotal = $request['subtotal'];
            $detalleVenta->finalizada = 1;*/

        } catch (Exception $e) {
            throw_if(true, Exception::class, $e->getMessage());
        }

    
        return $detalleVenta;
	}
}
