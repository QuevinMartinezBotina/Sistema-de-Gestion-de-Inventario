<?php

   require_once '../../../modelo/empleadosdao.php';
   $dao=new EmpleadoDao();
   $usuarios=$dao->listaEmpleados();
   $tam=sizeof($usuarios);
   require_once 'vistamostrar.php';

   