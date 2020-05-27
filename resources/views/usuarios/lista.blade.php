@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Lista de usuarios</h1>    
    <div class="table table-responsive">
    	<table class="table table-striped">
			<thead>
			    <tr>
			      <td>ID</td>
			      <td>Nombre y Apellido</td>
			      <td>Nombre de Usuario</td>
			      <td>DNI</td>
			      <td>Fecha de nacimiento</td>
			      <td>Rol</td>
			    </tr>
			</thead>
			<tbody>
			    @foreach($usuarios as $usuario)
			    <tr>
			        <td>{{$usuario->id}}</td>
			        <td>{{$usuario->nombre}}  {{ $usuario->apellido }}</td>
			        <td>{{$usuario->nombreusuario}}</td>
			        <td>{{$usuario->dni}}</td>
			        <td>{{$usuario->fecha_nac}}</td>
			        <td>{{$usuario->rol}}</td>
			    </tr>
			    @endforeach
			</tbody>
		</table>
    </div>
<div>
</div>
@endsection