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
    <link rel="stylesheet" href="./Bootstrap/css/style_index.css">
    <link rel="stylesheet" href="./Bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <title>Inicio</title>
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
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container mb-2">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto nav justify-content-end">
                                <li class="nav-item"><img src="./img/1.png" alt="Imagen 1"></li>
                                <p class="nav-item">"Dulce nectar"</p>
                                <li class="nav-item"><a class="nav-link active" href="index.php">Inicio</a></li>
                                <?php
                                    if(($correoUsuario!='') && $tipoUsuario==1)
                                    {
                                    echo '<li class="nav-item"><a class="nav-link" href="P_Enlace/Catalogo.php">Catalago</a></li>';
                                    echo '<li class="nav-item"><a class="nav-link" href="P_Enlace/pedidos.php">Pedidos</a></li>';
                                    echo '<li class="nav-item"><a class="nav-link" href="Usuario/administrarusuarios.php">Usuarios</a></li>';
                                    }
                                ?>
                                <li class="nav-item"><a class="nav-link" href="./P_Enlace/Productos.php">Productos</a></li>
                                <li class="nav-item"><a class="nav-link" href="./P_Enlace/Nosotros.php">Nosotros</a></li>
                                <li class="nav-item"><a class="nav-link" href="./P_Enlace/Contacto.php">Contacto</a></li>
                                <li class="nav-item"><a href="#"><img src="./img/diseños/ac.png" alt="Imagen 1"></a></li>
                                <li class="nav-item">
                                    <?php
                                    if ($correoUsuario == '') {
                                        echo '<a href="login.php"><img src="./img/a2.png" alt="Imagen 2"></a>';
                                    } else {
                                        echo '<p>' . $correoUsuario . '</p>';
                                        echo '<a class="sesion" href="cerrarsesion.php">Cerrar Sesión</a>';
                                    }
                                    ?>
                                </li>
                                <li class="nav-item"><a href="#"><img src="./img/b2.png" alt="Imagen 3"></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>

            <img src="./img/q/1.jpg" alt="Banner" class="banner img-fluid mb-4">

            <div class="container mt-4">
                <!-- Otras partes del código... -->
            
                <h1 class="text-center">Promoción del Mes</h1>
            
                <!-- Div con las imágenes de la promocióOn -->
                   <div class="row text-center">
                        <div class="col-md-3 col-12 mb-2">
                            <img src="./img/descarga.jpg" alt="Promoción 1" class="img-fluid mx-auto">
                        </div>
                        <div class="col-md-3 col-12 mb-2">
                            <img src="./img/descarga (1).jpg" alt="Promoción 2" class="img-fluid mx-auto">
                        </div>
                        <div class="col-md-3 col-12 mb-2">
                            <img src="./img/descarga (2).jpg" alt="Promoción 3" class="img-fluid mx-auto">
                        </div>
                        <div class="col-md-3 col-12 mb-2">
                            <img src="./img/PROMOCION-1.2-kilos-miel-de-abeja-Panal-Real.jpg" alt="Promoción 4" class="img-fluid mx-auto">
                        </div>
                    </div>
                </div>
            
            </div>
            <div class="ver-mas" class="col-md-4">
                <input type="button" class="btn btn-primary btn-block" style="background-color: rgb(218, 199, 35);" value="Ver más productos" onclick="window.location.href='./P_Enlace/productos.php';">
            </div>

            <h1 class="text-center">Nuestras Colecciones</h1>
            <!-- Tabla con espacio para 4 imágenes -->
            <div class="row">
                <div class="col-md-3">
                    <img src="./img/Video para post de Instagram Beneficios de la miel moderno amarillo.png" alt="Producto 1" class="img-fluid">
                    <p>Miel y salud</p>
                </div>
                <div class="col-md-3">
                    <img src="./img/1.jpg" alt="Producto 2" class="img-fluid">
                    <p>Proceso</p>
                </div>
                <div class="col-md-3">
                    <img src="./img/2.jpg" alt="Producto 3" class="img-fluid">
                    <p>Productos de colmena</p>
                </div>
                <div class="col-md-3">
                    <img src="./img/3.jpg" alt="Producto 4" class="img-fluid">
                    <p>Tipos de miel</p>
                </div>
            </div>

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
                    <a href="#" class="social-icon"><img src="./img/facebook.png" width="30px" alt="Facebook"></a>
                    <a href="#" class="social-icon"><img src="./img/twitter.png" width="30px" alt="Twitter"></a>
                    <!-- Añade más redes sociales según sea necesario -->
                </div>
                <div class="col-md-4">
                    <p>Información de Contacto</p>
                    <p>Ubicación: Ciudad</p>
                    <p>Teléfono: +123456789</p>
                    <p>Correo: ejemplo@dominio.com</p>
                    <!-- Añade más información de contacto según sea necesario -->
                </div>
                <tr height="100px"><!--Pie de pagina-->
                    <td colspan="2">
                        <h4>Licenciatura en Sistemas computacionales</h4>
                        <p>&copy; Copyright 2023.  5°J</p>
                    </td>
                </tr>
            </section>
        </form>
    </div>
</body>
</html>