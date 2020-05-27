<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //

	protected $table = 'productos';

    protected $fillable = [
        'proveedor_id', 
        'nombre',
        'marca',
        'fecha_venc',
        'precio'
    ];

    public function proveedor ()
    {
        return $this->belongsTo('App\Proveedor'); //cada producto le pertenece a un proveedor
    }

    public function detalleVenta ()
    {
        return $this->belongsTo('App\DetalleVenta'); //cada producto pertenece a un detalle de venta
    }
	public static function saveData ($request)
	{
		$producto = new self(); //creo un nuevo objeto

        try {

            //dd($request);
            
            /**
                Almacenamos datos de produto
            */

            /*$producto->proveedor_id = $request['proveedor_id'];
            $producto->nombre = $request['nombre'];
            $producto->marca = $request['marca'];
            $producto->fecha_venc = $request['fecha_venc'];
            $producto->precio = $request['precio'];*/
            $producto->proveedor_id = 1;
            $producto->nombre = 'nombrepr';
            $producto->marca = 'marcapr';
            $producto->fecha_venc = '27-04-2020';
            $producto->precio = 14;

            $producto->save();

        } catch (Exception $e) {
            throw_if(true, Exception::class, $e->getMessage());
        }

    
        return $producto;
	}
}
