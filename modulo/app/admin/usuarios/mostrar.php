<?php

   require_once '../../../modelo/usuariodao.php';
   $dao=new UsuarioDao();
   $usuarios=$dao->listausuarios();
   $tam=sizeof($usuarios);
   require_once 'vistamostrar.php';

   