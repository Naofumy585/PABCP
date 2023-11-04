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
    <title>Mi portafolio</title>
    <link rel="stylesheet" href="../Bootstrap/css/style_productos.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Bootstrap/js/bootstrap.min.js">
</head>
<body>
    <header>
        <!--Menu-->
    <section>
               <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container mb-2">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto nav justify-content-end">
                                        <li class="nav-item"><img src="../img/1.png" alt="Imagen 1"></li>
                                        <p class="nav-item">"Dulce nectar"</p>
                                        <li class="nav-item"><a class="nav-link active" href="index.php">Inicio</a></li>
                                        <?php
                                                if(($correoUsuario!='') && $tipoUsuario==1)
                                                {
                                                echo '<li class="nav-item" ><a class="nav-link" href="../P_Enlace/Catalago.php"">Catalago</a></li>';
                                                echo '<li class="nav-item" ><a class="nav-link" href="../P_Enlace/pedidos.php">Pedidos</a></li>';
                                                echo '<li class="nav-item" ><a class="nav-link" href="../Usuario/administrarusuarios.php">Usuarios</a></li>';
                                                }
                                            ?>
                                        <li class="nav-item"><a class="nav-link" href="../P_Enlace/Productos.php">Productos</a></li>
                                        <li class="nav-item"><a class="nav-link" href="../P_Enlace/Nosotros.php">Nosotros</a></li>
                                        <li class="nav-item"><a class="nav-link" href="../P_Enlace/Contacto.php">Contacto</a></li>
                                        <li class="nav-item"><a href="#"><img src="../img/diseños/ac.png" alt="Imagen 1"></a></li>
                                        <li class="nav-item">
                                            <?php
                                                if ($correoUsuario == '') {
                                                    echo '<a href="../login.php"><img src="../img/a2.png" alt="Imagen 2"></a>';
                                                } else {
                                                    echo '<p>' . $correoUsuario . '</p>';
                                                    echo '<a class="sesion" href="../cerrarsesion.php">Cerrar Sesión</a>';
                                                }
                                            ?>
                                        </li>
                                        <li class="nav-item"><a href="#"><img src="../img/b2.png" alt="Imagen 3"></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                </nav>
            </section>
   </header>
  
   <section id="Portafolio">
   <form action="guardarusuario.php" method="POST">

<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingresa con tu cuenta</h5>
<div class="form-outline mb-4">
  <input type="text" id="form2Example17" class="form-control form-control-lg" name="nombre" />
  <label class="form-label" for="form2Example17">Nombre completo</label>
</div>

<div class="form-outline mb-4">
  <input type="email" id="form2Example17" class="form-control form-control-lg" name="correo" />
  <label class="form-label" for="form2Example17">Correo electrónico</label>
</div>

<div class="form-outline mb-4">
  <input type="password" id="form2Example27" class="form-control form-control-lg" name="password"/>
  <label class="form-label" for="form2Example27">Password</label>
</div>
<div class="form-outline mb-4">
  <select name="tipo" class="form-control form-control-lg">
    <option value="1">Administrador</option>
    <option value="2">Cliente</option>
  </select>
  <label class="form-label" for="form2Example27">Tipo</label>
</div>
<div class="pt-1 mb-4">
  <input class="btn btn-dark btn-lg btn-block" 
  type="submit" value="Guardar">
</div>
</form>
   </section>
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
                    <a href="#" class="social-icon"><img src=".,/img/twitter.png" width="30px" alt="Twitter"></a>
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