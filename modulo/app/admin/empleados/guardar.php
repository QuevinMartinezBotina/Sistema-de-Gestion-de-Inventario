<?php
require_once '../../../modelo/empleadosdao.php';
$dao = new EmpleadoDao();
if (isset($_POST['boton'])) {

    if ($_POST['boton'] == 'guardar') {


        if (
            isset($_POST['id_empleado']) & isset($_POST['priapell']) & isset($_POST['segapell']) & isset($_POST['prinom'])
            & isset($_POST['segnom']) & isset($_POST['email']) & isset($_POST['celular']) & isset($_POST['direccion'])
            & isset($_POST['idsucursal']) & isset($_POST['idcargo']) & isset($_POST['ciudad']) & isset($_POST['departamento'])
            & isset($_POST['fecha_contratarcion'])
        ) {

            $id_empleado = htmlspecialchars($_POST['id_empleado']);
            $priapell = htmlspecialchars($_POST['priapell']);
            $segapell = htmlspecialchars($_POST['segapell']);
            $prinom = htmlspecialchars($_POST['prinom']);
            $segnom = htmlspecialchars($_POST['segnom']);

            $email = htmlspecialchars($_POST['email']);
            $celular = htmlspecialchars($_POST['celular']);
            $direccion = htmlspecialchars($_POST['direccion']);
            $idsucursal = htmlspecialchars($_POST['idsucursal']);
            $idcargo = htmlspecialchars($_POST['idcargo']);

            $ciudad = htmlspecialchars($_POST['ciudad']);
            $departamento = htmlspecialchars($_POST['departamento']);
            $fecha_contratarcion = htmlspecialchars($_POST['fecha_contratarcion']);




            if (
                empty($id_empleado) | empty($priapell) | empty($segapell) | empty($prinom) | empty($email)
                | empty($celular) | empty($idsucursal) | empty($idcargo) | empty($ciudad)
                | empty($departamento) | empty($fecha_contratarcion) 
            ) {
                $mensaje = "Campo Vacio";
            } else {

                $mensaje = $dao->insertarEmpleado($id_empleado, $priapell, $segapell, $prinom, $segnom, $email,
                                                  $celular, $direccion, $idsucursal, $idcargo, $ciudad, $departamento,$fecha_contratarcion);
            }
        }
    } else if ($_POST['boton'] == 'limpiar') {


        $id_empleado = "";
        $priapell = "";
        $segapell = "";
        $prinom = "";
        $segnom = "";

        $email = "";
        $celular = "";
        $direccion = "";
        $idsucursal = "";
        $idcargo = "";
        
        $ciudad = "";
        $departamento = "";
        $fecha_contratarcion = "";

    }
}

require_once 'vistaguardar.php';
