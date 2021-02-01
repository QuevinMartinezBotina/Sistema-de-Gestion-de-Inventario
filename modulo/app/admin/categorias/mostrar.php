<?php

   require_once '../../../modelo/categoriasdao.php';
   $dao=new CategoriaDao();
   $usuarios=$dao->listaCategorias();
   $tam=sizeof($usuarios);
   require_once 'vistamostrar.php';

   