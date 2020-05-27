@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Lista de clientes</h1>    
    <div class="table table-responsive">
    	<table class="table table-striped">
			<thead>
			    <tr>
			      <td>ID</td>
			      <td>Nombre y Apellido</td>
			      <td>DNI</td>
			      <td>Fecha de nacimiento</td>
			      <td>Tarjeta</td>
			    </tr>
			</thead>
			<tbody>
			    @foreach($clientes as $cliente)
			    <tr>
			        <td>{{$cliente->id}}</td>
			        <td>{{$cliente->nombre}} {{$cliente->apellido}}</td>
			        <td>{{$cliente->dni}}</td>
			        <td>{{$cliente->fecha_nac}}</td>
			        <td>{{ \Illuminate\Support\Str::limit($cliente->tarjeta, 10, $end='...') }}</td>
			    </tr>
			    @endforeach
			</tbody>
		</table>
    </div>
<div>
</div>
@endsection