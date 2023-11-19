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
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Formulario de Tarjeta de Crédito Dinámico</title>
	<link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../Bootstrap/css/style_fpago.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
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
                                    echo '<li class="nav-item"><a class="nav-link" href="../P_Enlace/Catalogo.php">Catalago</a></li>';
                                    echo '<li class="nav-item"><a class="nav-link" href="../P_Enlace/pedidos.php">Pedidos</a></li>';
                                    echo '<li class="nav-item"><a class="nav-link" href="../Usuario/administrarusuarios.php">Usuarios</a></li>';
                                    }
                                ?>
                            <li class="nav-item"><a class="nav-link" href="../P_Enlace/Productos.php">Productos</a></li>
                            <li class="nav-item"><a class="nav-link" href="../P_Enlace/Nosotros.php">Nosotros</a></li>
                            <li class="nav-item"><a class="nav-link disable" href="../P_Enlace/Contacto.php" tabindex="-1" aria-disabled="true">Contacto</a></li>
                            <li class="nav-item" style="margin-right: auto;"><a href="../P_Enlace/Contacto.php"><img src="../img/diseños/ac.png" alt="Imagen 1"></a></li>
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
                    </div>
                </div>
            </nav>
            </section>

            <img src="../img/bb/3.jpg" alt="Banner" class="banner img-fluid mb-4">
            <form action="PC_producto.php" method="post" class="form">
            <input type="hidden" name="id_producto" value="<?php echo $producto['id']; ?>">

                    <div class="row">
                        <div class="col-12">
                            <div class="form__div">
                                <input type="text" class="form-control" placeholder=" " name="Num_targeta">
                                <label for="form2Example17" class="form__label">Numero de targeta</label>
                            </div>
                        </div>
                        

                        <div class="col-6">
                            <div class="form__div">
                                <input type="password" class="form-control" placeholder=" " name="CVV">
                                <label for="" class="form__label">CVV</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form__div">
                                <input type="text" class="form-control" placeholder=" " name="FechaVencimiento">
                                <label for="form2Example17" class="form__label">MM / yy</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form__div">
                                <input type="text" class="form-control" placeholder=" " name="titularTarjeta">
                                <label for="" class="form__label">Titular de la targeta</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form__div">
                                <input type="text" class="form-control" placeholder=" " name="NombreRecibePedido">
                                <label for="" class="form__label">¿Quien recibe?</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form__div">
                                <input type="text" class="form-control" placeholder=" " name="Direccion">
                                <label for="" class="form__label">Direccion</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form__div">
                                <input type="text" class="form-control" placeholder=" " name="CodigoPostal">
                                <label for="" class="form__label">Codigo postal</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form__div">
                                <input type="tel" class="form-control" placeholder=" " name="Telefono">
                                <label for="" class="form__label">Numero telefonico</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form__div">
                                <input type="email" class="form-control" placeholder=" " name="CorreoElectronico">
                                <label for="" class="form__label">Email</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100">Hacer compra</button>
                        </div>
                    </div>
                </form>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="/Bootstrap/js/main.js"></script>
</body>
</html>