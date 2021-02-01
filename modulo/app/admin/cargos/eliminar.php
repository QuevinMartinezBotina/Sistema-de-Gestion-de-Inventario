<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $idcargo = base64_decode($_GET['idcargo']);
    require_once '../../../modelo/cargosdao.php';
    $dao = new CargoDao();
    $dao->eliminarCargo($idcargo);

    require_once 'vista.eliminar.php';


}
