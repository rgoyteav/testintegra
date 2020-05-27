@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Lista de productos</h1>    
    <div class="table table-responsive">
    	<table class="table table-striped">
			<thead>
			    <tr>
			      <td>ID</td>
			      <td>Nombre</td>
			      <td>Marca</td>
			      <td>Proveedor</td>
			      <td>Fecha de vencimiento</td>
			      <td>Precio</td>
			    </tr>
			</thead>
			<tbody>
			    @foreach($productos as $producto)
			    <tr>
			        <td>{{$producto->id}}</td>
			        <td>{{$producto->nombre}}</td>
			        <td>{{$producto->marca}}</td>
			        <td id="proveedorTd">{{$producto->proveedor->nombre}}</td>
			        <td>{{$producto->fecha_venc}}</td>
			        <td>{{$producto->precio}}</td>
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
	$(window).load(function() {
		$.ajax({
	        type: "GET",
	        dataType: "json",
	        url: "{{ route ('productos.obtenerNombreProveedores', 3) }}",
	        success: function(response)
	        {
	        	$.each(response,function(key, proveedor) {
	        		$("#proveedorTd").append(proveedor.nombre);
	        	});
	        },
	        error : function(xhr, status) {
		        alert('Disculpe, existió un problema');
		    }
	    });
	});
	
</script>