@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Detalles de ventas</h1>    
    <div class="table table-responsive">
    	<table class="table table-striped">
			<thead>
			    <tr>
			      <td>#</td>
			      <td>ID de venta</td>
			      <td>Producto</td>
			      <td>Precio unitario</td>
			      <td>Cantidad</td>
			      <td>Subtotal</td>
			    </tr>
			</thead>
			<tbody>
			    @foreach($detalleVentas as $detalleVenta)
			    <tr>
			        <td>{{$detalleVenta->id}}</td>
			        <td>{{$detalleVenta->venta_id}}</td>
			        <td>{{$detalleVenta->producto->nombre}}</td>
			        <td id="proveedorTd">{{$detalleVenta->precio_unitario}}</td>
			        <td>{{$detalleVenta->cantidad}}</td>
			        <td>{{$detalleVenta->subtotal}}</td>
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
