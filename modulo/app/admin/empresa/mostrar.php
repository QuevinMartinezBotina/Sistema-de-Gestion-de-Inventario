<?php
require_once "../../../modelo/empresadao.php";
$dao= new empresaDao();
$mostrar=$dao->tablaEmpresa();
$tam=sizeof($mostrar);
require_once "tablaempresa.php";