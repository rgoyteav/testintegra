@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3 class="">Registrar nueva venta</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('ventas.store') }}">
          @csrf
          <div class="row">
			<div class="col-md-4  @if($errors->has('name')) has-error @endif">
	          <div class="form-group">
	              <label for="fecha_nac">Fecha de venta</label>
	              <input type="date" class="form-control" name="fecha_venta" max="2020-05-26" required/>
	          </div>
	          <div class="form-group">
	              <label for="fecha_nac">Monto total de la venta</label>
	              <input type="number" class="form-control" name="total" min="0" required/>
	          </div>
	          <div class="form-group">
	          	  <select id="clienteSelect" name="cliente_id" class="input-100" required>
                	<option value = "" required>Elija un cliente</option>
            	  </select>
	              <!--<label for="tarjeta">Rol</label>
	              <input type="text" class="form-control" name="rol" maxlength="191" required/>-->
	          </div>
	          <div class="form-group">
	          	  <select id="rolSelect" name="rol" class="input-100" required>
                	<option value = "" required>Elija un empleado</option>
            	  </select>
	              <!--<label for="tarjeta">Rol</label>
	              <input type="text" class="form-control" name="rol" maxlength="191" required/>-->
	          </div>
	        </div>
	       </div>
          <button type="submit" class="btn btn-primary-outline">Agregar venta</button>
      </form>
  </div>
</div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
