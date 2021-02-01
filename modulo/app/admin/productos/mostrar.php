<?php

   require_once '../../../modelo/productosdao.php';
   $dao=new ProductoDao();
   $usuarios=$dao->listaProductos();
   $tam=sizeof($usuarios);
   require_once 'vistamostrar.php';

   