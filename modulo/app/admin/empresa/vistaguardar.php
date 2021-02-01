<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/styles-menu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>compras</title>
</head>

<body>
    <div class="container-fluid mx-md-1 ">
        <div class="d-flex justify-content-center">


            <form action="?action=guardar" method="post" class="container contenedor-guardar-usuarios animacion-lateral pl-md-5 pt-md-4">

                <div class="row">

                    <div class="col-11 mx-1">

                        <?php
                        if (empty($mensaje) == false) {

                            echo "<div class='alert alert-warning alert-dismissible fade show'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            " . $mensaje . "</div>";
                        }
                        ?>


                    </div>

                    <div class="row col-12 ">

                        <div class="col-md-2 my-3 ">
                            <label for="">id empresa o NIT</label>
                            <input type="text" class="form-control" name="id_empresa" value="<?php if (isset($id_empresa)) {
                                                                                                    echo $id_empresa;
                                                                                                } ?>">

                        </div>


                        <div class="col-md-4 my-3 mx-md-2">
                            <label for="">nombre de la empresa</label>
                            <input type="text" class="form-control" name="nomempresa" value="<?php if (isset($nomempresa)) {
                                                                                                    echo $nomempresa;
                                                                                                } ?>">

                        </div>

                        <div class="col-md-3 my-3 mr-2">

                            <label for="">representante legal</label>
                            <input type="text" class="form-control" name="reprelegal" value="<?php if (isset($representante_legal)) {
                                                                                                    echo $representante_legal;
                                                                                                } ?>">

                        </div>

                        <div class="col-md-2 my-3">
                            <label for="">actividad economica</label>
                            <input type="text" class="form-control" name="actieco" value="<?php if (isset($actividad_economica)) {
                                                                                                echo $actividad_economica;
                                                                                            } ?>">
                        </div>

                    </div>


                    <div class="row col-12">

                        <div class="col-md-3">
                            <label for="">direccion</label>
                            <input type="text" class="form-control" name="direccion" value="<?php if (isset($direc_empresa)) {
                                                                                                echo $direc_empresa;
                                                                                            } ?>">
                        </div>

                        <div class="col-md-4 mx-2">
                            <label for="">telefono</label>
                            <input type="number" class="form-control" name="tel" value="<?php if (isset($telefono)) {
                                                                                            echo $telefono;
                                                                                        } ?>">

                        </div>



                        <div class="col-md-4 mr-2">
                            <label for="">email</label>
                            <input type="mail" class="form-control" name="email" value="<?php if (isset($email)) {
                                                                                            echo $email;
                                                                                        } ?>">
                        </div>




                    </div>

                    <div class="row col-12">

                        <div class="col-md-3">
                            <label for="">pais</label>
                            <input type="text" class="form-control" name="pais" value="<?php if (isset($pais)) {
                                                                                            echo $pais;
                                                                                        } ?>">
                        </div>

                        <div class="col-md-4 mx-2">
                            <label for="">ciudad</label>
                            <input type="text" class="form-control" name="ciudad" value="<?php if (isset($cuidad)) {
                                                                                                echo $cuidad;
                                                                                            } ?>">
                        </div>




                        <div class="col-md-4">
                            <label for="">zona</label>
                            <input type="text" class="form-control" name="zona" value="<?php if (isset($zona)) {
                                                                                            echo $zona;
                                                                                        } ?>">
                        </div>



                    </div>






                </div>
                <br>
                <center>
                    <div class="col-12 my-4">

                        <button type="submit" name="boton" value="guardar" class="btn btn-primary my-2 p-2 mx-2">
                            <i class="fas fa-check"></i> Guardar
                        </button>
                        
                        <button type="submit" name="boton" value="limpiar" class="btn btn-warning my-2 p-2">
                            <i class="fas fa-trash"></i> Limpiar
                        </button>

                    </div>
                </center>
        </div>


        </form>
    </div>

    </div>

    </div>

    </div>






</body>

</html>