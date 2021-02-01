<?php
function validarSesion($usuarioPermitido = '1')
{

    if (isset($_SESSION['usuario'])) {
        
        if ($_SESSION['rol'] !== $usuarioPermitido) {
           
            header('location:index.php');
        }
    }
}
