<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table = 'usuarios';

    public function venta ()
    {
        return $this->hasMany('App\Venta'); //un usuario puede hacer muchas ventas
    }

    public static function saveData ($request)
	{
		$usuario = new self(); //creo un nuevo objeto

        try {

            //dd($request);
            
            /**
                Almacenamos datos de usuario
            */

            $usuario->nombreusuario = $request['nombreusuario'];
            $usuario->password = $request['password'];
            $usuario->nombre = $request['nombre'];
            $usuario->apellido = $request['apellido'];
            $usuario->dni = $request['dni'];
            $usuario->fecha_nac = $request['fecha_nac'];
            $usuario->legajo = 1;
            $usuario->rol = $request['rol'];

            $usuario->save();

        } catch (Exception $e) {
            throw_if(true, Exception::class, $e->getMessage());
        }

    
        return $usuario;
	}
}
