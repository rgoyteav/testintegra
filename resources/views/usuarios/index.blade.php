@extends('adminlte::page')
@section('css')
    @parent
    
    <link rel="stylesheet" href="{{ asset('enlinea/responsive.bootstrap.min.css') }}">
    <style type="text/css">
        tbody tr td {
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
	    
	<div class="table-responsive">

	    <table class="table table-striped table-hover display nowrap" id="product-table" cellspacing="0" width="100%">
			<thead>
				<th>CUC</th>
				<th>Código</th>
				<th>Nombre</th>
				<th>Precio $</th>
				<th>Stock</th>
				<th>Marca</th>
				<th>Actualizado</th>
				<th>Descripción</th>
				<th>WWW</th>
				<th> <i class="fa fa-cogs fa-2x"></i> </th>
			</thead>
			<tbody></tbody>
	    </table>
	</div>
@stop
@section('js')
    @parent
    
    <script src="{{ asset('enlinea/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).ready(function() {
			    $('#product-table').DataTable({
                responsive: true,
                processing: true,
                serverSide: false,
                stateSave: true,
                ajax: '{!! route('products.datatable') !!}',
                columns: [
                    { data: 'id', name: 'id'},
                    { data: 'reference', name: 'reference' },
                    { data: 'name', name: 'name' },
                    { data: 'price', name: 'price'},
                    { data: 'qty', name: 'inventory.qty', searchable: false },
                    { data: 'brand', name: 'brand' },
                    { data: 'date_update_price', name: 'date_update_price', searchable: false },
                    { data: 'model', name: 'model'},
                    { data: 'web', name: 'web', searchable: false },
                    { data: 'action', searchable: false, orderable: false }
                ],
                searchDelay: 200,
                "language": {
                  "lengthMenu": "Ver _MENU_ registros por página",
                  "zeroRecords": "No se encontraron resultados",
                  "info": "Viendo la página _PAGE_ de _PAGES_",
                  "infoEmpty": "No hay información",
                  "search": " Buscar: ",
                  "paginate": {
                    "previous": "Anterior",
                    "next": "Proximo"
                  },
                },
                "lengthMenu": [[20, 50, 100, 150], [25, 50, 100, 150]]
            });
			} );

            $(document).on('click', '.deleteProduct', () => {
                swal({
                    title: "Confirmar",
                    type: "warning",
                    text: "¿Desea eliminar el producto actual?.",
                    showCancelButton: true,
                    cancelButtonColor: '#d33',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: "Si, continuar",
                })
                .then(
                    (confirm) => {
                      $('#formDeleteProduct').submit();
                    },
                    () => {}
                );
            })
        });
    </script>
@endsection
