<?php

/* Inciamos al sesión */
session_start();

/* Luego al destruimso/cerramos */
session_destroy();
$_SESSION[]=array(); /* Y le decimso que deje la sesión en blanco */


header('location:login.php');