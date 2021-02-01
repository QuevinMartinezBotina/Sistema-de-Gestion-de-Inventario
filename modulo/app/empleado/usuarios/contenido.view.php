<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../css/estilos-menu.css">
    <link rel="stylesheet" href="../../../../css/pushbar.css">
    <link rel="stylesheet" href="../../../../css/estilos.usuarios.css">


    <!-- Icono -->
    <link rel="icon" href="../../../../img/icono.ico" type="image/png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Softlithe</title>
</head>

<body>
    <div class="contenedor">
        <!-- <header>
			<h1>FalconMasters</h1>
			<h2>Lorem Ipsum Premium Store</h2>
		</header> -->
        <main>
            <nav>

                <div class="row">

                    <div class="col-2">

                        <!-- Boton menú -->

                        <button class="boton-para-menu p-3 " data-pushbar-target="pushbar-menu"><i class="fas fa-bars"></i></button>

                    </div>

                    <div class="col-9 d-flex justify-content-end ml-1">
                        <a href="../../cerrar.php" class="d-flex align-self-center">Cerrar Sesión</a>
                    </div>
                </div>

            </nav>


            <!-- Contenido Menú -->
            <div data-pushbar-id="pushbar-menu" class="pushbar pushbar-menu " data-pushbar-direction="left">


                <nav class="">
                    <div class="row">
                        <div class="col-12">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                <img class=" img-fluid my-2" src="../../../../img/profile-blue.svg" alt="" style="height: 100px;">
                                <p class="pb-2 text-center">Empleado</p>
                                <hr>

                                <a class=" nav-link p-3 active " href="#"><i class="fas fa-home icono"></i> Inicio</a>

                                <a class=" nav-link p-3 " href="../productos/productos.php"><i class="fas fa-server icono"></i> Productos</a>



                                <a class=" nav-link p-3" href="../proveedores/proveedores.php"><i class="fas fa-truck icono"></i> Proveedores</a>


                                <a class=" nav-link p-3" href="../categorias/categorias.php"><i class="fa fa-cubes icono"></i> Categorías</a>

                                <a class=" nav-link p-3" href="../sucursales/sucursales.php"><i class="fa fa-building icono"></i> Sucursales</a>


                                <a class=" nav-link p-3" href="../movimientos/movimientos.php"><i class="fa fa-shopping-basket icono"></i> Compras y Ventas</a>









                            </div>
                        </div>

                    </div>
                </nav>
            </div>


            <!-- SECIONES -->
            <section class="productos ">

                <div class="col-12">
                    <div class="tab-content" id="v-pills-tabContent">


                        <!--*************** INVENTARIO********** -->
                        <div class="tab-pane fade show active texto	" id="v-pills-home" role="takbpanel" aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="text-center texto-usuarios p-2">Bienvenido Empleado</h1>
                                    <!-- ***Mensaje Bienvenida** -->


                                </div>

                                <div class="row my-5 mx-3 shadow">

                                    <div class="col-md-3 d-flex  mt-1 d-flex justify-content-center">
                                        <img class="img-fluid p-3 " src="../../../../img/logoSoftlithe.png" alt="" style="height: 250px;">
                                    </div>

                                    <div class="col-md-8  text-center align-self-center">
                                        <h1 class="my-3">Sistema de Gestión de Inventario y Ventas</h1>
                                        <p class="mt-2">Este es un programa fue desarrollado con la finalidad de gestionar las ventas, compras,
                                            inventario y otros apartados de un establecimiento, dentro de este puede tener el control de distintos apartados dependiendo su nivel de acceso dentro del programa.</p>
                                    </div>
                                </div>


                                <div class="row mx-md-3 my-3 mb-5 d-flex justify-content-center">

                                    <div class="col-12 mb-5 text-center">
                                        <h2>¿Que puedo hacer dentro del programa?</h2>
                                    </div>


                                    <div class="card col-md-3 text-center p-3 mx-md-2 shadow">
                                        <img src="../../../../img/inventario.svg" class="img-fluid"  style="height: 280px;">
                                        <div class="card-body mr-5">

                                            <h2 class="mb-2">Productos</h2>
                                            <p class="card-text">Puedes supervisar los productos con los que cuentas y gestionarlos, estos se modifican
                                                en tiempo real con cada compra o venta que realizas. </p>
                                        </div>
                                    </div>

                                    <div class="card col-md-3 text-center p-3 mx-md-5 shadow my-5 my-md-0">
                                        <img src="../../../../img/usuarios.svg" class="img-fluid " style="height: 280px;" alt="...">
                                        <div class="card-body">

                                            <h2 class="mb-2">Usuarios</h2>
                                            <p class="card-text">
                                                Gestionar los distintos usuarios que tienen acceso al sistema, desde sus usuarios a niveles de acceso.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card col-md-3 text-center p-3 mx-md-2 shadow">
                                        <img src="../../../../img/comprasVentas.svg" class="img-fluid " style="height: 280px;">
                                        <div class="card-body">

                                            <h2 class="mb-2">Compras y ventas</h2>
                                            <p class="card-text">Puedes supervisar los productos con los que cuentas y gestionarlos, estos se modifican
                                                en tiempo real con cada compra o venta que realizas. </p>
                                        </div>
                                    </div>



                                    <div class="col-12 text-center mt-5">
                                        <p>Estas son algunas de las cosas que puedes hacer dentro del sistema</p>
                                        <p>explora y descrubre todas las funciones disponibles para tí.</p>
                                    </div>



                                </div>

                            </div>
                        </div>












                    </div>
                </div>

            </section>
        </main>


    </div>

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <script src="../../../../js/pushbar.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->


    <script type="text/javascript">
        var nbsp = new Pushbar({
            blur: true,
            overlay: true,
            nbsp
        });
    </script>

</body>

</html>