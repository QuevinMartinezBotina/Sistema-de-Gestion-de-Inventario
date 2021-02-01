<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $id_producto = base64_decode($_GET['id_producto']);
    require_once '../../../modelo/productosdao.php';
    $dao = new ProductoDao();
    $dao->eliminarProducto($id_producto);

    require_once 'vista.eliminar.php';


}
