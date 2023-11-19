<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idProducto = $_POST['id_producto'];
    $numTargeta = $_POST['Num_targeta'];
    $CVV = $_POST['CVV'];
    $FechaVencimiento = $_POST['FechaVencimiento'];
    $titularTarjeta = $_POST['titularTarjeta'];
    $nombreRecibePedido = $_POST['NombreRecibePedido'];
    $direccion = $_POST['Direccion'];
    $codigoPostal = $_POST['CodigoPostal'];
    $telefono = $_POST['Telefono'];
    $correoElectronico = $_POST['CorreoElectronico'];

    include_once "../Core/FProductos.php";
    $objetoTuClase = new Productos(); 

    // Obtén el ID de usuario de la sesión
    $idUsuario = $_SESSION['idUsuario'];

    $respuesta = $objetoTuClase->ProcesarCompra(
        $numTargeta, $CVV, $FechaVencimiento, $titularTarjeta,
        $nombreRecibePedido, $direccion, $codigoPostal, $telefono,
        $correoElectronico, $idUsuario, $idProducto);

    if ($respuesta == "Compra procesada con éxito") {
        echo "<script>alert('Compra procesada con éxito');</script>";
        echo "<a href='../P_Enlace/Productos.php'>Volver a la página de productos</a>";
        // Puedes redirigir a otra página después de procesar la compra si es necesario
    } else {
        echo "<script>alert('Error al procesar la compra: $respuesta');</script>";
        echo "<a href='../P_Enlace/Productos.php'>Volver a la página de productos</a>";

        // Puedes manejar el error según tus necesidades
    }
}
?>