<?php
require_once '../../../modelo/categoriasdao.php';
$dao = new CategoriaDao();
if (isset($_POST['boton'])) {

    if ($_POST['boton'] == 'guardar') {


        if (isset($_POST['id_categoria']) & isset($_POST['nomcategoria'])) {

            $id_categoria = htmlspecialchars($_POST['id_categoria']);
            $nomcategoria = htmlspecialchars($_POST['nomcategoria']);
            

            if (empty($id_categoria) | empty($nomcategoria)) {
                $mensaje = "Campo Vacio";
            } else {

                $mensaje = $dao->insertarCategoria($id_categoria,$nomcategoria);
            }
        }
    } else if ($_POST['boton'] == 'limpiar') {

        
        $id_categoria = "";
        $nomcategoria = "";
        
    }
}

require_once 'vistaguardar.php';
