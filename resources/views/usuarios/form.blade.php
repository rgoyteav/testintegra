@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3 class="">Registrar nuevo usuario</h1>
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
      <form method="post" action="{{ route('usuarios.store') }}">
          @csrf
          <div class="row">
			<div class="col-md-4  @if($errors->has('name')) has-error @endif">
	          <div class="form-group">    
	              <label for="nombre">Nombre</label>
	              <input type="text" class="form-control" name="nombre" maxlength="20" required/>
	          </div>
	          <div class="form-group">
	              <label for="nombre">Apellido<br> <label>
	              <input type="text" class="form-control" name="apellido" maxlength="20" required/>
	          </div>
	          <div class="form-group">
	              <label for="nombre">DNI<label>
	              <input type="text" class="form-control" name="dni" maxlength="8" required/>
	          </div>
	          <div class="form-group">
	              <label for="fecha_nac">Fecha de nacimiento</label>
	              <input type="date" class="form-control" name="fecha_nac" min="1900-05-26" max="2002-05-26" required/>
	          </div>
	          <div class="form-group">
	              <label for="fecha_nac">Nombre de usuario</label>
	              <input type="text" class="form-control" name="nombreusuario" maxlength="20" required/>
	          </div>
	          <div class="form-group">
	              <label for="tarjeta">Contraseña</label>
	              <input type="password" class="form-control" name="" maxlength="191" required/>
	          </div>
	          <div class="form-group">
	              <label for="tarjeta">Repetir contraseña</label>
	              <input type="password" class="form-control" name="password" maxlength="191" required/>
	          </div>
	          <div class="form-group">
	          	  <select id="rolSelect" name="rol" class="input-100" required>
                	<option value = "" required>Elija un rol</option>
                	<option value = "Empleado" required>Administrador</option>
                	<option value = "Empleado" required>Empleado</option>
            	  </select>
	              <!--<label for="tarjeta">Rol</label>
	              <input type="text" class="form-control" name="rol" maxlength="191" required/>-->
	          </div>
	        </div>
	       </div>
          <button type="submit" class="btn btn-primary-outline">Agregar usuario</button>
      </form>
  </div>
</div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
