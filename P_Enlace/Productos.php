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
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto nav justify-content-end">
                            <li class="nav-item"><img src="../img/1.png" alt="Imagen 1"></li>
                            <p class="nav-item">"Dulce nectar"</p>
                                <li class="nav-item"><a class="nav-link active" href="../index.php">Inicio</a></li>
                                <?php
                                    if(($correoUsuario!='') && $tipoUsuario==1)
                                    {
                                    echo '<li class="nav-item"><a class="nav-link" href="Catalogo.php">Catalago</a></li>';
                                    echo '<li class="nav-item"><a class="nav-link" href="Productos/administrarP.php">Pedidos</a></li>';
                                    echo '<li class="nav-item"><a class="nav-link" href="../Usuario/administrarusuarios.php">Usuarios</a></li>';
                                    }
                                ?>
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
                                <?php
                                    if(($correoUsuario!='') && $tipoUsuario==2)
                                    {
                                    echo '<li class="nav-item"><a href="Productos/Carrito.php"><../img src="img/b2.png" alt="Imagen 3"></a></li>';
                                }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
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
                    <div class="Caja" class="producto">
                        <script>
                        function verificarUsuario() {
                            <?php
                            // Verifica si hay un usuario logeado en PHP
                            if ($correoUsuario == '') {
                                echo 'alert("Debes iniciar sesión o registrarte para comprar o agregar al carrito.");';
                                echo 'window.location.href = "../login.php";'; // Redirige a la página de inicio de sesión
                            }
                            ?>
                        }
                    </script>
                        <?php
                        // Aquí deberías incluir tu función CatalagoP()
                        include_once '../Core/Usuario.php';
                        $user = new Usuario();
                        $productos = $user->CatalagoP();

                        // Verifica si hay productos para mostrar
                        if (!empty($productos)) {
                            echo '<div class="row">';
                            
                            // Itera sobre los productos y crea las tarjetas (cards)
                            foreach ($productos as $producto) {
                                echo '<div class="col-md-4">';
                                echo '<div class="card" style="width: 18rem;">';
                                echo '<img src="' . $producto['Img'] . '" class="card-img-top" alt="' . $producto['Nombre'] . '">';
                                echo '<div class="card-body">';
                                echo '<h5 class="card-title">' . $producto['Nombre'] . '</h5>';
                                echo '<p class="card-text">' . $producto['modelo'] . '</p>';
                                echo '<p class="card-text">$' . $producto['precio'] . '</p>';
                                
                                // Modificación: Agregar la función verificarUsuario() en los botones
                                echo '<a href="../Productos/Pago.php" class="btn btn-primary" onclick="verificarUsuario()">Comprar</a>';
                                echo '<a href="../Productos/Carrito.php" class="btn btn-success" onclick="verificarUsuario()">Añadir al carrito</a>';
                                
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }

                            echo '</div>';
                        } else {
                            echo '<p>No hay productos disponibles.</p>';
                        }
                        ?>      
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
    function verificarUsuario() {
                            <?php
                            // Verifica si hay un usuario logeado en PHP
                            if ($correoUsuario == '') {
                                echo 'alert("Debes iniciar sesión o registrarte para comprar o agregar al carrito.");';
                                echo '<a href="#" class="btn btn-success" onclick="verificarUsuario()">Aceptar</a>'; // Redirige a la página de inicio de sesión
                            }
                            ?>
                        }
                    </script>
</body>
</html>