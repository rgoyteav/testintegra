@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Lista de proveedores</h1>    
    <div class="table table-responsive">
    	<table class="table table-striped">
			<thead>
			    <tr>
			      <td>ID</td>
			      <td>Nombre</td>
			      <td>CUIT</td>
			      <td>Dirección</td>
			      <td>Teléfono</td>
			    </tr>
			</thead>
			<tbody>
			    @foreach($proveedores as $proveedor)
			    <tr>
			        <td>{{$proveedor->id}}</td>
			        <td>{{$proveedor->nombre}}</td>
			        <td>{{$proveedor->CUIT}}</td>
			        <td>{{$proveedor->direccion}}</td>
			        <td>{{$proveedor->telefono}}</td>
			    </tr>
			    @endforeach
			</tbody>
		</table>
    </div>
<div>
</div>
@endsection