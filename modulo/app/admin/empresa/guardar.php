<?php

require_once "../../../modelo/empresadao.php";
$dao = new empresaDao();
if (isset($_POST['boton'])) {

    if ($_POST['boton'] == "guardar") {

        if (
            isset($_POST['id_empresa']) &
            isset($_POST['nomempresa']) &
            isset($_POST['reprelegal']) &
            isset($_POST['actieco']) &
            isset($_POST['direccion']) &
            isset($_POST['tel']) &
            isset($_POST['pais']) &
            isset($_POST['ciudad']) &
            isset($_POST['zona']) &
            isset($_POST['email'])
        ) {

            $id_empresa = htmlspecialchars($_POST['id_empresa']);
            $nomempresa = htmlspecialchars($_POST['nomempresa']);
            $representante_legal = htmlspecialchars($_POST['reprelegal']);
            $actividad_economica = htmlspecialchars($_POST['actieco']);
            $direc_empresa = htmlspecialchars($_POST['direccion']);
            $telefono = htmlspecialchars($_POST['tel']);
            $pais = htmlspecialchars($_POST['pais']);
            $cuidad = htmlspecialchars($_POST['ciudad']);
            $zona = htmlspecialchars($_POST['zona']);
            $email = htmlspecialchars($_POST['email']);


            if (
                empty($id_empresa) |
                empty($nomempresa) |
                empty($representante_legal) |
                empty($actividad_economica) |
                empty($direc_empresa) |
                empty($telefono) |
                empty($pais) |
                empty($cuidad) |
                empty($zona) |
                empty($email)

            ) {
                $mensaje = "campos vacios";
            } else {

                $mensaje = $dao->insertarDatos(
                    $id_empresa,
                    $nomempresa,
                    $representante_legal,
                    $actividad_economica,
                    $direc_empresa,
                    $telefono,
                    $email,
                    $pais,
                    $cuidad,
                    $zona
                );
            }
        }
    } elseif ($_POST['boton'] == "limpiar") {

            $id_empresa = "";
            $nomempresa = "";
            $representante_legal = "";
            $actividad_economica ="";
            $direc_empresa = "";
            $telefono ="";
            $pais = "";
            $cuidad = "";
            $zona = "";
            $email = "";

    }
}

require_once "vistaguardar.php";