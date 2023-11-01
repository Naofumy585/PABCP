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
    <link rel="stylesheet" href="../Bootstrap/css/style_contacto.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <title>Nosotros</title>
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
                    <li class="nav-item" style="margin-right: auto;"><a href="#"><img src="../img/diseños/ac.png" alt="Imagen 1"></a></li>
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

            <img src="../img/bb/o/p/4.png" alt="Banner" class="banner img-fluid mb-4">

            <table>
                <tr>
                       <!-- Columna de Datos de Contacto -->
                        <td>
                        <img src="../img/1.png" alt="kdkad">
                        <div id="mapa" >
                            <p><b>Direccion:</b></p>
                            <h6>Blvd. Belisario Domínguez 3329, Sin Nombre, 29020 Tuxtla Gutiérrez, Chis</h6>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238.7877380372275!2d-93.12351853254094!3d16.746608799999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd858a580ecb5%3A0x49c5169d06ab0547!2sCalle%20S%C3%A9ptima%20Poniente-Sur%201057%2C%20San%20Francisco%2C%2029066%20Tuxtla%20Guti%C3%A9rrez%2C%20Chis.!5e0!3m2!1ses!2smx!4v1695314356385!5m2!1ses!2smx">
                                </iframe>
                            </div>
                         </td>
                        <td text-center>
                        <section>
                            <img src="../img/bb/o/p/7.png" alt="Banner" class="banner img-fluid mb-4">
                        </section><br>
                        <p>Teléfono: 9612999608</p>
                        <p>Correo: ejemplo@dominio.com</p>
                        </td>
                    <!-- Columna de Inicio de Sesión -->
                    
                </tr>
            </table>
            <!-- Sección de redes sociales e información -->
            <section id="Pie_p" class="row">
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
                <footer>
                    <td colspan="2">
                        <h3>Liceciatura en Sistemas computacionales</h3>
                        <p> &copy;Derechos reservados a la abeja chiapaneca</p>
                    </td>
                </footer>
            </section>
        </form>
    </div>
    <!-- Agrega la referencia al script de Bootstrap al final del body -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    // Obtén referencias a los formularios
    var loginForm = document.getElementById('login-form');
    var registerForm = document.getElementById('register-form');

    // Agrega un event listener a la pestaña de inicio de sesión
    document.getElementById('tab-login').addEventListener('click', function () {
      // Muestra el formulario de inicio de sesión
      loginForm.style.display = 'block';
      // Oculta el formulario de registro
      registerForm.style.display = 'none';
    });

    // Agrega un event listener a la pestaña de registro
    document.getElementById('tab-register').addEventListener('click', function () {
      // Muestra el formulario de registro
      registerForm.style.display = 'block';
      // Oculta el formulario de inicio de sesión
      loginForm.style.display = 'none';
    });
  });
    </script>
</body>
</html>