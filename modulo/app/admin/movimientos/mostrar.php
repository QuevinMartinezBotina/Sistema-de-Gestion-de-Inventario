<?php

   require_once '../../../modelo/movimientosdao.php';
   $dao=new MovimientoDao();
   $usuarios=$dao->listaMovimientos();
   $tam=sizeof($usuarios);
   require_once 'vistamostrar.php';

   