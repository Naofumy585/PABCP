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
    <title>Usuarios</title>
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
                                        <li class="nav-item"><a class="nav-link active" href="../index.php">Inicio</a></li>
                                            <?php
                                                if(($correoUsuario!='') && $tipoUsuario==1)
                                                {
                                                echo '<li class="nav-item" ><a class="nav-link" href="../P_Enlace/Catalogo.php"">Catalago</a></li>';
                                                echo '<li class="nav-item"><a class="nav-link" href="administrarP.php">Pedidos</a></li>';
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
   </header>
  
   <section id="Portafolio">
        <div>
            <table class="table table-light">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>id_usuario</th>
                        <th>Fecha del Pedido</th>
                        <th></th>
                        <th></th>
                    <tr>
                </thead>
                <tbody>
                <?php
        include_once '../Core/FProductos.php';

        $productos = new Productos();
        $resultado = $productos->ObtenerPedidos();

        foreach ($resultado as $item) {
            echo '<tr>';
            
            // Verifica si el índice 'id' existe y si no, muestra un mensaje alternativo
            echo '<td>' . (isset($item['id']) ? $item['id'] : 'Desconocido') . '</td>';
            echo '<td>' . (isset($item['id_producto']) ? $item['id_producto'] : 'Desconocido') . '</td>';
            echo '<td>' . (isset($item['id_usuario']) ? $item['id_usuario'] : 'Desconocido') . '</td>';
            echo '<td>' . (isset($item['fecha_pedido']) ? $item['fecha_pedido'] : 'Desconocido') . '</td>';

            // Verifica si el índice 'id' existe antes de crear los enlaces
            if (isset($item['id'])) {
                echo '<td><a href="eliminarPe.php?id=' . $item['id'] . '"><img src="../img/Eliminar.png"/></a></td>';
                echo '<td><form action="EditarPe.php" method="post">';
                echo '<input type="hidden" name="id" value="' . $item['id'] . '">';
                echo '<input type="hidden" name="DireccionDireccion" value="' . $item['Direccion'] . '">';
                echo '<input type="hidden" name="NombreRecibePedido" value="' . $item['NombreRecibePedido'] . '">';
                echo '<input type="hidden" name="CodigoPostal" value="' . $item['CodigoPostal'] . '">';
                echo '<input type="hidden" name="Telefono" value="' . $item['Telefono'] . '">';
                echo '<button type="submit"><img src="../img/Editar.png"/></button>';
                echo '</form></td>';
            } else {
                // Si 'id' no existe, muestra celdas vacías
                echo '<td></td>';
                echo '<td></td>';
            }
            
            echo '</tr>';
        }
?>

                </tbody>
            </table>
           
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>