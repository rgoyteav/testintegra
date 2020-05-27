<?php $__env->startSection('main'); ?>
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3 class="">Registrar nueva venta</h1>
  <div>
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div><br />
    <?php endif; ?>
      <form method="post" action="<?php echo e(route('ventas.store')); ?>">
          <?php echo csrf_field(); ?>
          <div class="row">
			<div class="col-md-8 <?php if($errors->has('name')): ?> has-error <?php endif; ?>">
			  <div class="form-group">			  	
			  	<input type="text" style="display: none" class="form-control" name="producto_id" id="producto_id" value=""/>
          	  </div>
			  <div class="form-group">
			  	<label for="" id="">ID de Venta: </label>
			  	<label for="" id="labelVenta2"></label>
			  	<input type="text" style="display: none" class="form-control" name="venta_id" id="labelVenta" value=""/>
          	  </div>
			  <div class="form-group">
	          	  <select id="clienteSelect" name="cliente_id" class="input-100" required>
	            	<option value = "" required>Elija un cliente</option>
	        	  </select>
          	  </div>
          	  <div class="form-group">
	          	  <select id="empleadoSelect" name="usuario_id" class="input-100" required>
                	<option value = "" required>Elija un empleado</option>
            	  </select>
	              <!--<label for="tarjeta">Rol</label>
	              <input type="text" class="form-control" name="rol" maxlength="191" required/>-->
	          </div>
	          <div class="row">
	          	  <div class="form-group col-md-12">
	          	    <select id="productoSelect" name="" class="input-100" required>
                	  <option value = "" required>Elija un producto
                	  </option>
            	    </select>
		          </div>
		          <div class="form-group col-md-2">
		              <!--<label for="fecha_nac">Cantidad</label>-->
		              <input type="number" class="form-control" id="cantidad" min="1" title="cantidad" required/>
		          </div>
		          <div class="form-group col-md-4">
		          	<label class="btn btn-primary-outline" onclick="llenarLista()" id="btnProducto" style="border: solid 1px;">
		          		Agregar producto a la lista
		          	</label>
		          </div>
	          </div>
	          <div class="table table-responsive" style="border: solid 1px;">
		          <table class="table table-striped" id="tablaDetalle">
		          	<thead>
		          		<tr>
		          			<td style="border-bottom: solid 1px; border-right: solid 1px">#</td>
		          			<td style="border-bottom: solid 1px; border-right: solid 1px">Producto</td>
		          			<td style="border-bottom: solid 1px; border-right: solid 1px">Cantidad</td>
		          			<td style="border-bottom: solid 1px; border-right: solid 1px;">Precio unitario ($)</td>
		          			<td style="border-bottom: solid 1px">Subtotal ($)</td>
		          		</tr>
		          	</thead>
		          	<tbody id="listaDetalles">
		          		<tr>
		          		</tr>
		          	</tbody>
		          </table>
		      </div>
	          <div class="form-group">
	              <label for="fecha_nac">Monto total de la venta: </label>
	              <label id = "labelMontoTotal" value="1230">0</label>
	              <input type="text" style="display: none" class="form-control" name="total" id="labelMontoTotal2" value="0"/>
	          </div>
	        </div>
	       </div>
	      <input type="hidden" name="_csrf" value="<your_csrf_token>" />
	      <input type="hidden">
          <button type="submit" class="btn btn-primary-outline">Registrar venta</button>
      </form>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>

<script type="text/javascript">
	$(window).load(function() {
		var ventaId = document.getElementById('labelVenta');
		var ventaId3 = document.getElementById('labelVenta2');
		var ventaId2;
		$.ajax({
			async: false,
	        type: "GET",
	        dataType: "json",
	        url:"<?php echo e(route('detalleventas.obtenerIdVenta')); ?>",
	        success: function(response){
	        	$.each(response,function(key, producto) {
	        		console.log(producto);
	        		ventaId2 = producto;
	        	});
	        },
	        error : function(xhr, status) {
		        alert('Disculpe, existió un problema');
		    }
	    });
	    console.log(ventaId2);
	    ventaId3.innerHTML = ventaId2;
		ventaId3.setAttribute("value", ventaId2 + 1);
	    ventaId.innerHTML = ventaId2;
		ventaId.setAttribute("value", ventaId2 + 1);
		//peticion para obtener clientes
	    $.ajax({
            type: "GET",
            dataType: "json",
            url: "<?php echo e(route ('detalleventas.obtenerClientes')); ?>",
            success: function(response)
            {
            	$.each(response,function(key, cliente) {
            		$("#clienteSelect").append('<option value='+(key+1)+'>'+cliente.nombre+'</option>');
            	});
            },
            error : function(xhr, status) {
		        alert('Disculpe, existió un problema');
		    }
	    });
	    //peticion para obtener empleados
	    $.ajax({
            type: "GET",
            dataType: "json",
            url: "<?php echo e(route ('detalleventas.obtenerEmpleados')); ?>",
            success: function(response)
            {
            	$.each(response,function(key, empleado) {
            		$("#empleadoSelect").append('<option value='+(key+1)+'>'+empleado.nombre+'</option>');
            	});
            },
            error : function(xhr, status) {
		        alert('Disculpe, existió un problema');
		    }
	    });
	    //peticion para obtener productos
	    $.ajax({
            type: "GET",
            dataType: "json",
            url: "<?php echo e(route ('detalleventas.obtenerProductos')); ?>",
            success: function(response)
            {
            	$.each(response,function(key, producto) {
            		$("#productoSelect").append('<option value='+(key+1)+'>'+producto.nombre+'</option>');
            	});
            },
            error : function(xhr, status) {
		        alert('Disculpe, existió un problema');
		    }
	    });
	    //seteo los values en los selects
	    var select = document.getElementById('clienteSelect');
		select.addEventListener('change',
		  function(){
		    var selectedOption = this.options[select.selectedIndex];
		    console.log(selectedOption.value + ': ' + selectedOption.text);
		  });
		select.setAttribute("value", selectedOption.value);
		var select = document.getElementById('empleadoSelect');
		select.addEventListener('change',
		  function(){
		    var selectedOption = this.options[select.selectedIndex];
		    console.log(selectedOption.value + ': ' + selectedOption.text);
		  });
		select.setAttribute("value", selectedOption.value);
		var select = document.getElementById('productoSelect');
		select.addEventListener('change',
		  function(){
		    var selectedOption = this.options[select.selectedIndex];
		    console.log(selectedOption.value + ': ' + selectedOption.text);
		  });
		select.setAttribute("value", selectedOption.value);
	});
</script>
<script>
	function llenarLista() {
		var selectProd = document.getElementById('productoSelect');
		var labelTotal = document.getElementById('labelMontoTotal');
		var labelTotal2 = document.getElementById('labelMontoTotal2');
	  	var producto = selectProd.options[selectProd.selectedIndex];
		var cantidad = document.getElementById('cantidad');
		var asd=producto;
		var valor = asd.value;
		var precio;
		var subtotal;
		var total = 0;
		$.ajax({
			async: false,
            type: "GET",
            dataType: "json",
            url:"<?php echo e(route('detalleventas.obtenerPrecioProducto')); ?>",
            success: function(response){
            	$.each(response,function(key, producto) {
            		if (valor == key+1) {
            			precio = producto.precio;
            		};
            	});
            },
            error : function(xhr, status) {
		        alert('Disculpe, existió un problema');
		    }
	    });
	    subtotal = precio*cantidad.value;
	    console.log(total);
	    total = subtotal + parseInt(labelTotal.textContent);
	    total2 = subtotal + parseInt(labelTotal2.textContent);
	    labelTotal.innerHTML = total;
	    labelTotal.setAttribute("value",total);
	    labelTotal2.innerHTML = total;
	    labelTotal2.setAttribute("value",total);
	    document.getElementById("tablaDetalle").insertRow(-1).innerHTML = '<td id='+producto.value+'><input type="hidden" name="producto_id[]" value="'+producto.value+'"/>'+producto.value+'</td><td id='+producto.text+'>'+producto.text+'</td><td id='+cantidad.value+'><input type="hidden" name="cantidad[]" value="'+cantidad.value+'"/>'+cantidad.value+'</td><td id='+precio+'><input type="hidden" name="precio_unitario[]" value="'+precio+'"/>'+precio+'</td><td><input type="hidden" name="subtotal[]" value="'+subtotal+'" />'+subtotal+'</td>';

	    var arr = [];

		$("#listaDetalles tr td").each(function() {
		  arr.push(this.id);
		});
		console.log(arr);
	}
	
</script>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testintegra\resources\views/detalleVentas/form.blade.php ENDPATH**/ ?>