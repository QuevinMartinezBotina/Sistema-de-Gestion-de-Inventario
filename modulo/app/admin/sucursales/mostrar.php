<?php

   require_once '../../../modelo/sucursalesdao.php';
   $dao=new SucursalDao();
   $usuarios=$dao->listaSucursales();
   $tam=sizeof($usuarios);
   require_once 'vistamostrar.php';

   