@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Lista de ventas</h1>    
    <div class="table table-responsive">
    	<table class="table table-striped">
			<thead>
			    <tr>
			      <td>ID</td>
			      <td>Cliente</td>
			      <td>Empleado que realizó la venta</td>
			      <td>Fecha de la venta</td>
			      <td>Monto total de la venta</td>
			      <td>Accion</td>
			    </tr>
			</thead>
			<tbody>
			    @foreach($ventas as $venta)
			    <tr>
			        <td>{{$venta->id}}</td>
			        <td>{{$venta->cliente->nombre}}</td>
			        <td>{{$venta->usuario->nombre}}</td>
			        <td id="proveedorTd">{{$venta->fecha_venta}}</td>
			        <td>{{$venta->total}}</td>
			        <td ><a href="{{ route('generar-pdf', $venta->id) }}">Imprimir factura</a></td>
			    </tr>
			    @endforeach
			</tbody>
		</table>
    </div>
<div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
	$( document ).ready(function() {
	    
	});
	
</script>
