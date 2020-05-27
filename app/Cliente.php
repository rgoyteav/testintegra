<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Cliente extends Model
{
    //
    protected $table = 'clientes'; //asocio el modelo con la tabla

    protected $fillable = [
        'nombre', 
        'apellido',
        'dni',
        'fecha_nac',
        'tarjeta'
    ];

    public function venta ()
	{
		return $this->hasMany('App\Venta'); //un cliente puede hacer muchas compras
	}

	public static function saveData ($request)
	{
		$cliente = new self(); //creo un nuevo objeto cliente
        
        /*
            Guardar el Perfil de Cliente
         */

        try {

            //dd($request);
            
            /**
                Almacenamos el profile de cliente
            */

            $cliente->nombre = $request['nombre'];
            $cliente->apellido = $request['apellido'];
            $cliente->dni = $request['dni'];
            $cliente->fecha_nac = $request['fecha_nac'];
            $cliente->tarjeta = Hash::make($request['tarjeta']);

            $cliente->save();
            /*
            $profile = Profile::saveProfileFromClient($request);

            $image_rp = $image_service = $image_dni = null;

            //Guardo Las Imagenes
            if ($request->has('image_dni')) {
                $image_dni = Image::saveImage($request->file('image_dni'), 'uploads/clients/');
            }

            if ($request->has('image_service')) {
                $image_service = Image::saveImage($request->file('image_service'), 'uploads/clients/');
            }
            
            if ($request->has('receipt_payment')) {
                $image_rp = Image::saveImage($request->file('receipt_payment'), 'uploads/clients/');
            }

            $client->fill($request->all());

            if ($request->get('client_type_id') == 3 || $request->has('applies_moto')) {
                $client->applies_moto = true;
            } elseif(! $request->has('applies_moto')) {
                $client->applies_moto = false;
            }

            //Asigno nombre de las imagenes a guardar
            $client->image_dni = $image_dni;
            $client->image_service = $image_service;
            if ($request->has('receipt_payment')) {
                $client->receipt_payment = $image_rp;
            }

            //if ($request->get('client_type_id') == 2) {
                $client->enterprise = json_encode($request->get('enterprise'));
            //}

            //Asocio el cliente al perfil
            $client->profile()->associate($profile);

            //dd($client);*/

            //Si el Cliente es 010 
            /*if ($request->get('client_type_id') == 2) {
                
                if ($request->get('enterprise_id') != 'new') {
                    $enterprise = Enterprise::find($request->get('enterprise_id'));

                }else{
                    $enterprise = Enterprise::saveData($request);
                }

                //Guardo la asociacion de cliente y empresa a la que pertenece
                $clientEnterprise = new ClientEnterprise();
                $clientEnterprise->enterprise_id = $enterprise->id;
                $clientEnterprise->client_id = $client->id;
                $clientEnterprise->save();
            }*/
                
           

        } catch (Exception $e) {
            throw_if(true, Exception::class, $e->getMessage());
        }

    
        return $cliente;
	}
}
