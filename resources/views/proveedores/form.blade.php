@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3 class="">Registrar nuevo proveedor</h1>
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
      <form method="post" action="{{ route('proveedores.store') }}">
          @csrf
          <div class="row">
			<div class="col-md-4  @if($errors->has('name')) has-error @endif">
	          <div class="form-group">    
	              <label for="nombre">Nombre</label>
	              <input type="text" class="form-control" name="nombre" maxlength="191" required/>
	          </div>
	          <div class="form-group">
	              <label for="dni">CUIT <br> <label>
	              <input type="text" class="form-control" name="cuit" minlength="13" maxlength="13" placeholder="20-xxxxxxxx-x" pattern="\b(20|23|24|27|30|33|34)(\D)?[0-9]{8}(\D)?[0-9]" title="20-xxxxxxxx-x" required/>
	          </div>
	          <div class="form-group">
	              <label for="fecha_nac">Direccion</label>
	              <input type="text" class="form-control" name="direccion" maxlength="191" required/>
	          </div>
	          <div class="form-group">
	              <label for="tarjeta">Teléfono</label>
	              <input type="text" class="form-control" name="telefono" maxlength="191" pattern="\d{0,9}" title="Sólo números" required/>
	          </div>
	        </div>
	       </div>
          <button type="submit" class="btn btn-primary-outline">Agregar proveedor</button>
      </form>
  </div>
</div>
</div>
@endsection