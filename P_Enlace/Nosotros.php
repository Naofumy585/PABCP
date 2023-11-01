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
    <link rel="stylesheet" href="../Bootstrap/css/style_nosotros.css">
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
                    <li class="nav-item"><a class="nav-link active" href="../index.html">Inicio</a></li>
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

            <div>
                <!-- Aquí colocamos el banner y el texto encima -->
                <div class="position-relative">
                    <img src="../img/bb/o/p/5.png" alt="Tu Banner" class="img-fluid mb-4">
                    <div class="text-over-banner">
                        <p><b>Vision</b></p>
                        <p>Nuestra misión es ofrecer a nuestros
                            clientes la miel de la más alta calidad, producida
                             de manera sostenible y responsable. Nos esforzamos
                              por ser líderes en la industria apicola, promoviendo
                               la preservación de las abejas y sus hábitats, al 
                               tiempo que brindamos productos excepcionales que
                                satisfacen los paladares más exigentes. Estamos 
                                comprometidos con la excelencia en cada paso de 
                                nuestro proceso de producción
                            y en proporcionar a nuestros clientes una experiencia
                             única y saludable a través de nuestros productos de miel.</p>
                    </div>
                </div>
                <div >
                    <!-- Aquí colocamos el banner y el texto encima -->
                    <div class="position-relative">
                        <img src="../img/bb/o/p/6.png" alt="Tu Banner" class="img-fluid mb-4">
                        <div class="Caja2">
                            <p><b>Visión </b></p>
                            <p>Nuestra visión es convertirnos en líderes reconocidos a nivel
                                 mundial en la producción y comercialización de miel de alta
                                  calidad. Nos esforzamos por ser una empresa innovadora que
                                   utiliza prácticas sostenibles para apoyar a las abejas y a
                                    sus ecosistemas. Buscamos expandir nuestra presencia
                                 en los mercados internacionales, promoviendo la apreciación 
                                 de la miel como un producto natural y saludable.</p>
                        </div>
                    </div>
            </div>
            <h1>Fotos</h1>
            <section>
                <img src="../img/bb/o/p/7.png" alt="Banner" class="banner img-fluid mb-4">
            </section><br>
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
                    <a href="#" class="social-icon"><img src="../img/facebook.png" width="30PX" alt="Facebook"></a>
                    <a href="#" class="social-icon"><img src="../img/twitter.png" width="30PX" alt="Twitter"></a>
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
</body>
</html>