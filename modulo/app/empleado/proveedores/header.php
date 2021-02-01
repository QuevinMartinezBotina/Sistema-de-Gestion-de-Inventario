
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
      " href="?action=mostrar">Mostrar Proveedores</a>
    </li>

    <li class="nav-item">
      <a class="nav-link bordes p-3
      
      <?php
      if ($action == "guardar") echo "active";
      ?> 
      " href="?action=guardar">Agregar Proveedor</a>
    </li>
  </ul>
</div>

