<?php

   require_once '../../../modelo/movimientosdao.php';
   $dao=new MovimientoDao();
   $usuarios=$dao->listaVentas();
   $tam=sizeof($usuarios);
   require_once 'vistamostrarventas.php';

   