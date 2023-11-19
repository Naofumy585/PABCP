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
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pomperrier&display=swap">
    <link rel="stylesheet" href="../Bootstrap/css/style_productos.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
</head>
<body>

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
                                    echo '<li class="nav-item"><a class="nav-link" href="../Productos/administrarP.php">Pedidos</a></li>';
                                    echo '<li class="nav-item"><a class="nav-link" href="../Usuario/administrarusuarios.php">Usuarios</a></li>';
                                    echo '<li class="nav-item"><a href="Carrito.php"><img src="img/b2.png" alt="Imagen 3"></a></li>';
                                }
                                ?>
                            <li class="nav-item"><a class="nav-link" href="../P_Enlace/Productos.php">Productos</a></li>
                            <li class="nav-item"><a class="nav-link" href="../P_Enlace/Nosotros.php">Nosotros</a></li>
                            <li class="nav-item"><a class="nav-link disable" href="../P_Enlace/Contacto.php" tabindex="-1" aria-disabled="true">Contacto</a></li>
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
                    </div>
                </div>
            </nav>
            </section>
        
            <img src="../img/bb/3.jpg" alt="Banner" class="banner img-fluid mb-4">

<div class="container mt-5">
    
    <h2 class="mb-4">Carrito de Compras</h2>

    <?php
// Aquí deberías incluir tu función ObtenerProductos()
include_once '../Core/FProductos.php';
$user = new Productos();
$productos = $user->ObtenerProductos();


// Muestra los productos en el carrito
if (!empty($productos)) {
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">#</th>';
    echo '<th scope="col">Producto</th>';
    echo '<th scope="col">Precio</th>';
    echo '<th scope="col">Total</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Itera sobre los productos en el carrito y muestra cada uno
    foreach ($productos as $index => $producto) {
        echo '<tr>';
        echo '<th scope="row">' . ($index + 1) . '</th>';
        echo '<td>';
        echo '<img src="' . $producto['Img'] . '" alt="' . $producto['Nombre_producto'] . '" style="max-width: 50px;">';
        echo $producto['Nombre_producto'];
        echo '</td>';
        echo '<td>$' . $producto['Precio'] . '</td>';
        echo '<td>$' . ($producto['Precio'] ) . '</td>';
        echo '<td>';
        echo '<button class="btn btn-danger">Eliminar</button>';
        echo '</td>';
        echo '</tr>';
    }
    
    // Mostrar el total del carrito
    echo '<tr>';
    echo '<td colspan="4" class="text-right"><strong>Total:</strong></td>';
    echo '<td><strong>$' . array_sum(array_column($productos, 'precio_total')) . '</strong></td>';
    echo '<td></td>';
    echo '</tr>';

    echo '</tbody>';
    echo '</table>';
} else {
    echo '<p>No hay productos en el carrito.</p>';
}
?>

    <div class="text-right">
        <button class="btn btn-primary">Realizar Compra</button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>