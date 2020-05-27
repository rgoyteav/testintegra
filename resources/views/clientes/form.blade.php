@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3 class="">Registrar nuevo cliente</h1>
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
      <form method="post" action="{{ route('clientes.store') }}">
          @csrf
          <div class="row">
			<div class="col-md-4  @if($errors->has('name')) has-error @endif">
	          <div class="form-group">    
	              <label for="nombre">Nombre</label>
	              <input type="text" class="form-control" name="nombre" maxlength="191" required/>
	          </div>

	          <div class="form-group">
	              <label for="apellido">Apellido</label>
	              <input type="text" class="form-control" name="apellido" maxlength="191" required/>
	          </div>

	          <div class="form-group">
	              <label for="dni">DNI</label>
	              <input type="text" class="form-control" name="dni" minlength="8" maxlength="8" pattern="^[0-9]{8,8}" required/>
	          </div>
	          <div class="form-group">
	              <label for="fecha_nac">Fecha de nacimiento</label>
	              <input type="date" class="form-control" name="fecha_nac" min="1900-05-26" max="2002-05-26" required/>
	          </div>
	          <div class="form-group">
	              <label for="tarjeta">Número de tarjeta</label>
	              <input type="text" class="form-control" name="tarjeta" minlength="16" maxlength="16" pattern="^[0-9]{16,16}" required/>
	          </div>
	        </div>
	       </div>
          <button type="submit" class="btn btn-primary-outline">Agregar cliente</button>
      </form>
  </div>
</div>
</div>
@endsection