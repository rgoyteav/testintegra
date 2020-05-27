<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\DetalleVenta;

class Venta extends Model
{
    //
    protected $table = 'ventas';

    public function cliente ()
    {
        return $this->belongsTo('App\Cliente'); //cada venta tiene un cliente
    }

    public function usuario ()
    {
        return $this->belongsTo('App\Usuario'); //cada venta tiene un usuario
    }

    public function detalleVenta ()
    {
        return $this->belongsTo('App\DetalleVenta'); //cada venta tiene un detalle de venta
    }

    public static function saveData ($request)
	{
		$venta = new self(); //creo un nuevo objeto
        try {

            //dd($request);
            
            /**
                Almacenamos datos de venta
            */
            $venta->cliente_id = $request['cliente_id'];
            $venta->usuario_id = $request['usuario_id'];
            $venta->fecha_venta = Carbon::now();
            $venta->total = $request['total'];

            $venta->save();

            DetalleVenta::saveData($request);

        } catch (Exception $e) {
            throw_if(true, Exception::class, $e->getMessage());
        }

    
        return $venta;
	}
}
