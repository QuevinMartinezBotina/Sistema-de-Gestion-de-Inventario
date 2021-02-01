<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $id_empleado = base64_decode($_GET['id_empleado']);
    require_once '../../../modelo/empleadosdao.php';
    $dao = new EmpleadoDao();
    $dao->eliminarEmpleado($id_empleado);

    require_once 'vista.eliminar.php';


}
