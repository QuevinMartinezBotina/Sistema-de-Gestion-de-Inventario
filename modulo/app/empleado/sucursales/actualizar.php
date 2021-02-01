<?php

// peticion get para traer información del crud

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $usuario = unserialize(base64_decode($_GET['objeto']));

    $idsucursal = $usuario['idsucursal'];
    $nomsucursal = $usuario['nomsucursal'];
    $direccion = $usuario['direccion'];
    $ciudad = $usuario['ciudad'];

} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    require_once '../../../modelo/sucursalesdao.php';
    $dao = new SucursalDao();
    if (isset($_POST['boton'])) {

        if ($_POST['boton'] == 'guardar') {


            if (isset($_POST['idsucursal']) & isset($_POST['nomsucursal']) & isset($_POST['direccion']) & isset($_POST['ciudad'])) {

                $idsucursal = htmlspecialchars($_POST['idsucursal']);
                $nomsucursal = htmlspecialchars($_POST['nomsucursal']);
                $direccion = htmlspecialchars($_POST['direccion']);
                $ciudad = htmlspecialchars($_POST['ciudad']);



                if (empty($idsucursal) | empty($nomsucursal) | empty($direccion) | empty($ciudad)) {
                    $mensaje = "Campo Vacio";
                } else {

                    $mensaje = $dao->actualizarSucursal($idsucursal, $nomsucursal,$direccion,$ciudad);
                }
            }
        } else if ($_POST['boton'] == 'limpiar') {

            $idcargo = "";
            $nomcargo = "";
        }
    }
} // metodo post

// peticion post para actualizar el registro


require_once 'vistaactualizar.php';
