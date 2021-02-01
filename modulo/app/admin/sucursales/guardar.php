<?php
require_once '../../../modelo/sucursalesdao.php';
$dao = new SucursalDao();
if (isset($_POST['boton'])) {

    if ($_POST['boton'] == 'guardar') {


        if (isset($_POST['idsucursal']) & isset($_POST['nomsucursal']) & isset($_POST['direccion']) & isset($_POST['ciudad']))  {

            $idsucursal = htmlspecialchars($_POST['idsucursal']);
            $nomsucursal = htmlspecialchars($_POST['nomsucursal']);
            $direccion = htmlspecialchars($_POST['direccion']);
            $ciudad = htmlspecialchars($_POST['ciudad']);

            

            if (empty($idsucursal) | empty($nomsucursal) | empty($direccion) | empty($ciudad)) {
                $mensaje = "Campo Vacio";
            } else {

                $mensaje = $dao->insertarSucursal($idsucursal,$nomsucursal,$direccion,$ciudad);
            }
        }
    } else if ($_POST['boton'] == 'limpiar') {

        
        $idsucursal = "";
        $nomsucursal = "";
        $direccion = "";
        $ciudad = "";

        
    }
}

require_once 'vistaguardar.php';
