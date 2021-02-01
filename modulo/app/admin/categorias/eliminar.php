<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $id_categoria = base64_decode($_GET['id_categoria']);
    require_once '../../../modelo/categoriasdao.php';
    $dao = new CategoriaDao();
    $dao->eliminarCategoria($id_categoria);

    require_once 'vista.eliminar.php';


}
