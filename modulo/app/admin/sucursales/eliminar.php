<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $idsucursal = base64_decode($_GET['idsucursal']);
    require_once '../../../modelo/sucursalesdao.php';
    $dao = new SucursalDao();
    $dao->eliminarSucursal($idsucursal);

    require_once 'vista.eliminar.php';


}
