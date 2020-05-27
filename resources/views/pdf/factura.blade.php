<!DOCTYPE html>
<html>
<head>
	<title>Factura de venta</title>
</head>
<body>
	<h1>Impresión factura de venta - {{ $title }}</h1>
	<p></p>
	<label for="">ID de factura: {{ $id }}</label> <br>
	<label for="">Cliente: 
	<?php 
		foreach ($clientesNombre as $key => $cliente) {
			# code...
			echo $cliente->nombre;
			echo ' ';
			echo $cliente->apellido;
		}
	?>
	</label> <br>
	<label for="">Empleado que realizó la venta: 
		<?php 
			foreach ($usuarioNombre as $key => $usuario) {
				# code...
				echo $usuario->nombre;
				echo ' ';
				echo $usuario->apellido;
			}
		?>
	</label>
	<label for="">Legajo: 
		<?php 
			foreach ($usuarios as $key => $usuario) {
				# code...
				echo $usuario->usuario_id;
			}
		?>
	</label> <br>
	<h2>Lista de productos</h2>
	<table style="border: 1px solid;">
		<thead>
			<tr>
				<td style="border-right: 1px solid; border-bottom: 1px solid;">#</td>
				<td style="border-right: 1px solid; border-bottom: 1px solid;">Producto</td>
				<td style="border-right: 1px solid; border-bottom: 1px solid;">Precio unitario</td>
				<td style="border-right: 1px solid; border-bottom: 1px solid;">Cantidad</td>
				<td style="border-bottom: 1px solid;">Subtotal</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach ($detalleventa as $key => $detalle) {
			?>
			<tr>
				<td>
					<?php 
						echo $detalle->id;
					?>
				</td>
				<td>
					<?php 
						echo $detalle->nombre;
					?>
				</td>
				<td>
					<?php 
						echo $detalle->precio_unitario;
					?>
				</td>
				<td>
					<?php 
						echo $detalle->cantidad;
					?>
				</td>
				<td>
					<?php 
						echo $detalle->subtotal;
						}
					?>
				</td>
			</tr>
		</tbody>
	</table>
	<label for="">Total de la venta:</label>
	<label for="">
		<?php 
			foreach ($clientesNombre as $key => $cliente) {
				# code...
				echo $cliente->total;
			}
		?>
	</label>
</body>
</html>