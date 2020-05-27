@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
@guest
    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    @if (Route::has('register'))
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    @endif
@else
    <a id="navbarDropdown" class="dropdown-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>
    <div class="" aria-labelledby="">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@endguest
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (Auth::user()->name == 'Admin')
                <div class="card-header">Tareas que puede realizar el usuario {{Auth::user()->name}}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                       <a class="dropdown-item" href="{{route('usuarios.create')}}">Registrar empleado</a>
                </div>
                @else
                    <div class="card-header">Tareas que puede realizar el usuario {{Auth::user()->name}}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                           <a class="dropdown-item" href="{{route('clientes.create')}}">Registrar cliente</a>
                           <a class="dropdown-item" href="{{route('clientes.index')}}">Ver clientes</a>
                           <a class="dropdown-item" href="{{route('proveedores.create')}}">Registrar proveedor </a>
                           <a class="dropdown-item" href="{{route('proveedores.index')}}">Ver proveedores</a>
                           <a class="dropdown-item" href="{{route('productos.create')}}">Registrar producto</a>
                           <a class="dropdown-item" href="{{route('productos.index')}}">Ver productos</a>
                           <a class="dropdown-item" href="{{route('detalleventas.create')}}">Registrar nueva venta</a>
                           <a class="dropdown-item" href="{{route('ventas.index')}}">Ver lista de ventas</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
