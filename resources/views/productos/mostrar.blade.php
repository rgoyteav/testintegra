<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="menuContainer">Hola</div>

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
    </body>

    <script>
        $(document).ready(function () {
          $('.menuContainer').load('/menuadministrador');
        });
    
        /*$(document).ready(function() {
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
            });

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
        });*/
    </script>
</html>
