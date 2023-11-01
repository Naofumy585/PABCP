<?php
    session_start();
    if(isset($_SESSION["correoUsuario"])){
        $correoUsuario= $_SESSION["correoUsuario"];
        $tipoUsuario= $_SESSION["tipoUsuario"];
    }
    else{
        $correoUsuario= '';
        $tipoUsuario= '';
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pomperrier&display=swap">
    <link rel="stylesheet" href="../Bootstrap/css/style_productos.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <title>Productos</title>
    <style>
         * {
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
<div class="container-fluid">
        <form>
            <section>
            <nav class="navbar navbar-expand-lg navbar-light ">
                <ul class="navbar-nav ml-auto"class="nav justify-content-end">
                    <li class="nav-item"><img  src="../img/1.png" alt="Imagen 1"></li>
                    <li class="nav-item">"Dulce nectar"</li>
                    <li class="nav-item"><a class="nav-link active" href="../index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="Productos.php">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="Nosotros.php">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link disable" href="Contacto.php" tabindex="-1" aria-disabled="true">Contacto</a></li>
                    <li class="nav-item" style="margin-right: auto;"><a href="Contacto.html"><img src="../img/diseños/ac.png" alt="Imagen 1"></a></li>
                    <li class="nav-item">
                    <?php
                        if ($correoUsuario == '') {
                            echo '<a href="../login.php"><img src="../img/a2.png" alt="Imagen 2"></a>';
                        } else {
                            echo '<p>' . $correoUsuario . '</p>';
                            echo '<a class="sesion" href="../cerrarSesion.php">Cerrar Sesión</a>';
                        }
                        ?>
                    </li>
                    <li class="nav-item"><a href="#"><img src="../img/b2.png" alt="Imagen 3"></a></li>
                </ul>
            </nav>
            </section>

            <img src="../img/bb/3.jpg" alt="Banner" class="banner img-fluid mb-4">

            <div class="container mt-4">
                <!-- Otras partes del código... -->
            
                <h1 class="text-center">¡Promoción del Mes!</h1>
            
                <!-- Div con las imágenes de la promoción -->
                <div class="row">
                    <div class="col-md-3">
                        <img src="../img/descarga.jpg" alt="Promoción 1" class="img-fluid mb-2">
                    </div>
                    <div class="col-md-3">
                        <img src="../img/descarga (1).jpg" alt="Promoción 2" class="img-fluid mb-2">
                    </div>
                    <div class="col-md-3">
                        <img src="../img/descarga (2).jpg" alt="Promoción 3" class="img-fluid mb-2">
                    </div>
                    <div class="col-md-3">
                        <img src="../img/PROMOCION-1.2-kilos-miel-de-abeja-Panal-Real.jpg" alt="Promoción 4" class="img-fluid mb-2">
                    </div>
                </div>
            
            </div>
            <h1 class="text-center">Productos</h1>
            <!-- Tabla con espacio para 4 imágenes -->
            <section id="Productos">
            <div class="Img-content" class="row">
                <div class="Caja" class="col-md-3">
                    <img src="../img/bb/1.png" alt="Producto 1" class="img-fluid">
                    <p>Miel de abeja Chabtic 100%</p>
                    <p>400g</p>
                    <p>Precio: 700MXN</p>
                </div>
                <div class="Caja" class="col-md-3">
                    <img src="../img/bb/2.png" alt="Producto 2" class="img-fluid">
                    <p>Nbf Miel de Abeja pura con panal</p>
                    <p>Comestible organica 454gr</p>
                    <p>Precio: 900MXN</p>
                </div>
                <div class="Caja" class="col-md-3">
                    <img src="../img/bb/3.png" alt="Producto 3" class="img-fluid">
                    <p>Miel de abeja carlota</p>
                    <p>300g</p>
                    <p>Precio: 60MXN</p>
                </div>
                <div class="Caja" class="col-md-3">
                    <img src="../img/bb/4.png" alt="Producto 4" class="img-fluid">
                    <p>Miel Selecta</p>
                    <p>Precio: 324MXN</p>
                </div>
               
            </div>
        </section><br>

            <div class="ver-mas" class="col-md-4">
                <input type="button" class="btn btn-primary btn-block" style="background-color: rgb(218, 199, 35);" value="Ver más productos" onclick="window.location.href='/PABCP-main/P_Enlace/Productos.html';">
            </div><br>

            <!-- Sección de redes sociales e información -->
            <section class="row">
                <div class="col-md-4">
                    <p>Hipertextos</p>
                    <a class="card-title mb-4 text-muted" href="#">Enlace 1</a>
                    <a href="#">Enlace 2</a>
                    <!-- Agrega más hipertextos o enlaces según sea necesario -->
                </div>
                <div class="col-md-4">
                    <p>Redes Sociales</p>
                    <!-- Añade enlaces o íconos de redes sociales aquí -->
                    <a href="#" class="social-icon"><img src="../img/facebook.png" width="30px" alt="Facebook"></a>
                    <a href="#" class="social-icon"><img src="../img/twitter.png" width="30px"  alt="Twitter"></a>
                    <!-- Añade más redes sociales según sea necesario -->
                </div>
                <div class="col-md-4">
                    <p>Información de Contacto</p>
                    <p>Ubicación: Ciudad</p>
                    <p>Teléfono: +123456789</p>
                    <p>Correo: ejemplo@dominio.com</p>
                    <!-- Añade más información de contacto según sea necesario -->
                </div>
        </form>

    </div>
    <section>
        <footer>
            <p> Derechos reservados a la abeja chiapaneca</p>
        </footer>
    </section>

    <!-- Agrega la referencia al script de Bootstrap al final del body -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>