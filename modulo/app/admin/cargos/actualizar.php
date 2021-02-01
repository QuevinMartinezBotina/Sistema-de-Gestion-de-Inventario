<?php

// peticion get para traer información del crud

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $usuario = unserialize(base64_decode($_GET['objeto']));

    $idcargo = $usuario['idcargo'];
    $nomcargo = $usuario['nomcargo'];
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    require_once '../../../modelo/cargosdao.php';
    $dao = new CargoDao();
    if (isset($_POST['boton'])) {

        if ($_POST['boton'] == 'guardar') {


            if (isset($_POST['idcargo']) & isset($_POST['nomcargo'])) {

                $idcargo = htmlspecialchars($_POST['idcargo']);
                $nomcargo = htmlspecialchars($_POST['nomcargo']);


                if (empty($idcargo) | empty($nomcargo)) {
                    $mensaje = "Campo Vacio";
                } else {

                    $mensaje = $dao->actualizarCargo($idcargo, $nomcargo);
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
