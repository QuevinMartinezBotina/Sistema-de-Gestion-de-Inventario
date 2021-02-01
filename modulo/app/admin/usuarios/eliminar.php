<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $id_empleado = base64_decode($_GET['id_empleado']);
    require_once '../../../modelo/usuariodao.php';
    $dao = new UsuarioDao();
    $dao->eliminarUsuario($id_empleado);

    require_once 'vista.eliminar.php';


}
