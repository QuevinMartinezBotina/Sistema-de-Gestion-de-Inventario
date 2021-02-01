<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
  <title>Entrada de Datos de Usuario</title>
  <style>
    #tabla {

      text-align: center;

    }

    #tabla>thead>tr>th:nth-child(5) {
      width: 20%;

    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
      background-color: #007bff;
      color: white !important;
      margin-top: 20px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
      background-color: #007bff !important;
      color: white !important;

    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:active {
      background-color: #007bff !important;
      color: white !important;

    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
      color: white !important;
      border: 1px solid #111;
      background-color: #585858;
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #007bff), color-stop(100%, #111));
      background: -webkit-linear-gradient(top, #007bff 0%, #007bff 0%);
      background: -moz-linear-gradient(top, #007bff 0%, #007bff 100%);
      background: -ms-linear-gradient(top, #007bff 0%, #007bff 100%);
      background: -o-linear-gradient(top, #007bff 0%, #007bff 100%);
      background: linear-gradient(to bottom, #007bff 0%, #007bff 100%);
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
      color: white !important;
      border: 1px solid #111;
      background-color: #585858;
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #007bff), color-stop(100%, #111));
      background: -webkit-linear-gradient(top, #007bff 0%, #007bff 0%);
      background: -moz-linear-gradient(top, #007bff 0%, #007bff 100%);
      background: -ms-linear-gradient(top, #007bff 0%, #007bff 100%);
      background: -o-linear-gradient(top, #007bff 0%, #007bff 100%);
      background: linear-gradient(to bottom, #007bff 0%, #007bff 100%);
    }
  </style>

</head>

<body>

  <div class="container-fluid px-md-3 animacion-lateral">

    <?php

    if ($tam == 0) {
      echo "<br><p><strong>No se encontro registro de ventas!!</strong></p>";
    } else {

    ?>


      <br>
      <table class="table table-striped py-3 table-hover table-borderless mb-4 pb-5" id="tabla">

        <thead class="thead-dark ">


          <th>Num</th>
          <th class="py-3">fecha</th>
          <th class="py-3">id_producto</th>
          <th class="py-3">cantidad</th>
          <th class="py-3">precio</th>
          <th class="py-3">id_proveedor</th>
          <th class="py-3">id_empleado</th>
          <th class="py-3">compra_venta</th>
          <th class="py-3">id_categoria</th>



        </thead>
        <tbody>
          <?php
          $cont = 1;

          foreach ($usuarios as $usuario) {
            echo
              "<tr>" .
                "<td class=' pt-4' >" . $cont . "</td>" .
                "<td class=' pt-4' >" . $usuario["fecha"] . "</td>" .
                "<td class=' pt-4' >" . $usuario["id_producto"] . "</td>" .
                "<td class=' pt-4' >" . $usuario["cantidad"] . "</td>" .
                "<td class=' pt-4' >" . $usuario["precio"] . "</td>" .
                "<td class=' pt-4' >" . $usuario["id_proveedor"] . "</td>" .
                "<td class=' pt-4' >" . $usuario["id_empleado"] . "</td>" .
                "<td class=' pt-4' >" . $usuario["compra_venta"] . "</td>" .
                "<td class=' pt-4' >" . $usuario["id_categoria"] . "</td>" .
 
                "</tr>";
            $cont++;
          }

          ?>

        </tbody>

        <table>
        <?php
      }
        ?>
  </div>
  <script>
    function asegurar() {
      rc = confirm("¿Seguro que desea Eliminar?");
      return rc;
    }


    $(document).ready(function() {
      $('#tabla').dataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        dom: 'Bfrtip',
        "pageLength": 5
      });
    });
  </script>
</body>

</html>