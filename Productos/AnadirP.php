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
    <title>Document</title>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Bootstrap/css/style_productos.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <style>
         * {
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
            <ul class="navbar-nav ml-auto"class="nav justify-content-end">
                <li class="nav-item"><img  src="../img/1.png" alt="Imagen 1"></li>
                <li class="nav-item">"Dulce nectar"</li>
                <li class="nav-item"><a class="nav-link active" href="../index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="../P_Enlace/Productos.php">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="../P_Enlace/Nosotros.php">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link disable" href="../P_Enlace/Contacto.php" tabindex="-1" aria-disabled="true">Contacto</a></li>
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
        <img src="../img/bb/o/p/4.png" alt="Banner" class="banner img-fluid mb-4">

          <section class="container-fluid">
            <div class="container-fluid">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                  <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                      <div class="col-md-6 col-lg-5 d-none d-md-block">
                        <img src="../img/1.png"
                          alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                      </div>
                      <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">

                          <form action="registrarP.php" method="POST" enctype="multipart/form-data">

                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Añade tu producto</h5>
                            <div class="form-outline mb-4">
                              <input type="text" id="form2Example17" class="form-control form-control-lg" name="Nombre" />
                              <label class="form-label" for="form2Example17">Nombre del producto</label>
                            </div>

                            <div class="form-outline mb-4">
                              <input type="text" id="form2Example17" class="form-control form-control-lg" name="modelo" />
                              <label class="form-label" for="form2Example17">Modelo</label>
                            </div>

                            <div class="form-outline mb-4">
                              <input type="number" id="form2Example27" class="form-control form-control-lg" name="precio"/>
                              <label class="form-label" for="form2Example27">Precio</label>
                            </div>
                            <div class="form-group mt-2">
                                <input type="hidden" name="MAX_FILE_SIZE" value="512000"/>
                                <p>Archivo: <input name="img" type="file"/> </p>
                            </div>

                            <div class="pt-1 mb-4">
                              <input class="btn btn-dark btn-lg btn-block" 
                              type="submit" value="Guardar">
                            </div>
                          </form>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
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
                    <a href="#" class="social-icon"><img src="../img/twitter.png" width="30px" alt="Twitter"></a>
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
</body>
</html>