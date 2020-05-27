<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $table = 'proveedores';

    protected $fillable = [
        'nombre', 
        'CUIT',
        'direccion',
        'telefono'
    ];

    public function producto ()
    {
        return $this->hasMany('App\Producto'); //un proveedor tiene muchos productos
    }


    public static function saveData ($request)
	{
		$proveedor = new self(); //creo un nuevo objeto

        try {

            //dd($request);
            
            /**
                Almacenamos datos de proveedor
            */

            $proveedor->nombre = $request['nombre'];
            $proveedor->CUIT = $request['cuit'];
            $proveedor->direccion = $request['direccion'];
            $proveedor->telefono = $request['telefono'];

            $proveedor->save();

        } catch (Exception $e) {
            throw_if(true, Exception::class, $e->getMessage());
        }

    
        return $proveedor;
	}

}
