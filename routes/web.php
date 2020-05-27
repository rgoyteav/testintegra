<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('index');
});*/



//Clientes
Route::get('clientes', 'ClienteController@index')->name('clientes.index'); //anda bien
Route::post('clientes', 'ClienteController@store')->name('clientes.store');
Route::get('crearcliente', 'ClienteController@create')->name('clientes.create'); //anda bien
Route::get('editarcliente', 'ClienteController@edit')->name('clientes.edit'); //anda bien

//Proveedores
Route::get('proveedores', 'ProveedorController@index')->name('proveedores.index'); //anda bien
Route::post('proveedores', 'ProveedorController@store')->name('proveedores.store');
Route::get('crearproveedor', 'ProveedorController@create')->name('proveedores.create'); //anda bien
Route::get('editarproveedor', 'ProveedorController@edit')->name('proveedores.edit'); //anda bien

//Productos
Route::get('productos', 'ProductoController@index')->name('productos.index'); //anda bien
Route::post('productos', 'ProductoController@store')->name('productos.store');
Route::get('crearproducto', 'ProductoController@create')->name('productos.create'); //anda bien
Route::get('crearproducto2', 'ProductoController@obtenerProveedores')->name('productos.obtenerProveedores'); //anda bien
Route::get('crearproducto3/{id}', 'ProductoController@obtenerNombreProveedores')->name('productos.obtenerNombreProveedores'); //anda bien

//Usuarios
Route::get('usuarios', 'UsuarioController@index')->name('usuarios.index'); //anda bien
Route::post('usuarios', 'UsuarioController@store')->name('usuarios.store');
Route::get('crearusuario', 'UsuarioController@create')->name('usuarios.create'); //anda bien
Route::get('editarusuario', 'UsuarioController@edit')->name('usuarios.edit'); //anda bien

//Ventas
Route::get('ventas', 'VentaController@index')->name('ventas.index'); //anda bien
Route::post('ventas', 'VentaController@store')->name('ventas.store');
Route::get('crearventa', 'VentaController@create')->name('ventas.create'); //anda bien
Route::get('editarventa', 'VentaController@edit')->name('ventas.edit'); //anda bien

//Detalles de Venta
Route::get('detalleventas', 'DetalleVentaController@index')->name('detalleventas.index'); //anda bien
Route::post('detalleventas', 'DetalleVentaController@store')->name('detalleventas.store');
Route::get('creardetalleventa', 'DetalleVentaController@create')->name('detalleventas.create'); //anda bien
Route::get('editardetalleventa', 'DetalleVentaController@edit')->name('detalleventas.edit'); //anda bien
Route::get('obtenerClientes', 'DetalleVentaController@obtenerClientes')->name('detalleventas.obtenerClientes'); //anda bien
Route::get('obtenerEmpleados', 'DetalleVentaController@obtenerEmpleados')->name('detalleventas.obtenerEmpleados'); //anda bien
Route::get('obtenerProductos', 'DetalleVentaController@obtenerProductos')->name('detalleventas.obtenerProductos'); //anda bien
Route::get('obtenerPrecioProducto', 'DetalleVentaController@obtenerPrecioProducto')->name('detalleventas.obtenerPrecioProducto'); //anda bien

Route::get('obtenerIdVenta', 'DetalleVentaController@obtenerIdVenta')->name('detalleventas.obtenerIdVenta'); //anda bien

//PDF
Route::get('generar-pdf/{id}','PDFController@generatePDF')->name('generar-pdf');

//---------------------------------------------------------------------//


Route::get('/menuprincipal', function () {
    return view('menuprincipal');
});
/*Route::get('/', function () {
    return view('layouts.page_templates.auth');
});*/
/*Route::get('/home', function () {
    return view('/home');
});
/*Route::get('/menuempleado', function () {
    return view('menuempleado');
});*/
Route::get('/empleados', function () {
    return view('/empleados.mostrar');
});
Route::get('/registrarempleado', function () {
    return view('/empleados.registrar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

//Auth::routes();

/*Route::get('/home', function () {
    if (Auth::check()) {
        //return redirect()->route('detalleventas.index');
        if (auth()->user()->hasRoles('Empleado')) {
            return redirect()->route('clientes.index');
        }
            /*
        } elseif (auth()->user()->hasRole('Vendedor') || auth()->user()->hasRole('Vendedor2')) {
            return redirect()->route('sales.create', ['opt' => 'high']);
        } elseif (auth()->user()->hasRole('Despachador')) {
            return route('deliveries.index');
        } else {
            return redirect()->route('user.profile');
        }*/
    /*}else{
        return view('auth.login');
    }
});*/
//Route::get('/home', 'HomeController@index')->name('home');
