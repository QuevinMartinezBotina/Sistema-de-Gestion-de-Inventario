<?php

   require_once '../../../modelo/proveedoresdao.php';
   $dao=new ProveedorDao();
   $proveedores=$dao->listaProveedores();
   $tam=sizeof($proveedores);
   require_once 'vistausuarios.php';

   