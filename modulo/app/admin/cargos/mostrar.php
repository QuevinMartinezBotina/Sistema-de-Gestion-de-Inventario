<?php

   require_once '../../../modelo/cargosdao.php';
   $dao=new CargoDao();
   $usuarios=$dao->listaCargos();
   $tam=sizeof($usuarios);
   require_once 'vistamostrar.php';

   