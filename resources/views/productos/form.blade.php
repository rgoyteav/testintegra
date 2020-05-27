@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3 class="">Registrar nuevo producto</h1>
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
      <form method="post" action="{{ route('productos.store') }}">
          @csrf
          <div class="row">
			<div class="col-md-4  @if($errors->has('name')) has-error @endif">
	          <div class="form-group">    
	              <label for="nombre">Nombre</label>
	              <input type="text" class="form-control" name="nombre" maxlength="50" required/>
	          </div>
	          <div class="form-group">
	              <label for="dni">Marca<br> <label>
	              <input type="text" class="form-control" name="marca" maxlength="50" required/>
	          </div>
	          <div class="form-group">
	          	<select id="proveedorSelect" name="proveedor_id" class="input-100" required>
                	<option value = "" required>Elija un proveedor</option>
            	</select>
	              <!--<label for="dni">Proveedor<br> <label>-->
	              	<!--<select name="proveedor_id" id="" required>Elegir proveedor</select>-->
	              <!--<input type="text" class="form-control" name="proveedor_id" required/>-->
	          </div>
	          <div class="form-group">
	              <label for="fecha_nac">Precio</label>
	              <input type="number" class="form-control" name="precio" min="0" required/>
	          </div>
	          <div class="form-group">
	              <label for="tarjeta">Fecha de vencimiento</label>
	              <input type="date" class="form-control" name="fecha_venc" min="2020-05-26" required/>
	          </div>
	        </div>
	       </div>
          <button type="submit" class="btn btn-primary-outline">Agregar producto</button>
      </form>
  </div>
</div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
	$(window).load(function() {
	    $.ajax({
            type: "GET",
            dataType: "json",
            url: "{{ route ('productos.obtenerProveedores') }}",
            success: function(response)
            {
            	$.each(response,function(key, proveedor) {
            		$("#proveedorSelect").append('<option value='+(key+1)+'>'+proveedor.nombre+'</option>');
            	});
            },
            error : function(xhr, status) {
		        alert('Disculpe, existió un problema');
		    }
	    });
	    var select = document.getElementById('proveedorSelect');
		select.addEventListener('change',
		  function(){
		    var selectedOption = this.options[select.selectedIndex];
		    console.log(selectedOption.value + ': ' + selectedOption.text);
		  });
		select.setAttribute("value", selectedOption.value);
	});
</script>