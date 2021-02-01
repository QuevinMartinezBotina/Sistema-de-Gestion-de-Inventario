<?php
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

                $mensaje = $dao->insertarCargo($idcargo,$nomcargo);
            }
        }
    } else if ($_POST['boton'] == 'limpiar') {

        
        $idcargo = "";
        $nomcargo = "";
        
    }
}

require_once 'vistaguardar.php';
