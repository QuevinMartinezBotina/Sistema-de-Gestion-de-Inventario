
<div class=" col-12 ">
  <ul class="nav nav-pills mb-3">
    <li class="nav-item">
      <a class="nav-link  bordes p-3
      <?php
      if ($action == "inicio") echo "active";
      ?>
      " href="?action=inicio">inicio</a>
    </li>

    <li class="nav-item">
      <a class="nav-link bordes p-3
      <?php
      if ($action == "mostrar") echo "active";
      ?>
      " href="?action=mostrar">Mostrar Compras</a>
    </li>

    <li class="nav-item">
      <a class="nav-link bordes p-3
      <?php
      if ($action == "ventas") echo "active";
      ?>
      " href="?action=ventas">Mostrar Ventas</a>
    </li>

    <li class="nav-item">
      <a class="nav-link bordes p-3
      
      <?php
      if ($action == "guardar") echo "active";
      ?> 
      " href="?action=guardar">Agregar una venta o compra</a>
    </li>
  </ul>
</div>

