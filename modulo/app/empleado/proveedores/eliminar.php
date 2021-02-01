<?php


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $id_proveedor = base64_decode($_GET['id_proveedor']);
    require_once '../../../modelo/proveedoresdao.php';
    $dao = new proveedorDao();
    $dao->eliminarProveedor($id_proveedor);

    require_once 'vista.eliminar.php';

   

}

