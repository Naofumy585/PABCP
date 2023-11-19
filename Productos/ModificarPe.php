<?php
// Verifica si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluye el archivo FProductos.php
    include_once "../Core/FProductos.php";

    // Obtén los datos del formulario
    $id = $_POST['id'];
    $direccion = $_POST['Direccion'];
    $nombreRecibePedido = $_POST['NombreRecibePedido'];
    $codigoPostal = $_POST['CodigoPostal'];
    $telefono = $_POST['Telefono'];

    // Datos actuales del pedido
    $direccion_actual = $_POST['Direccion'];
    $nombreRecibePedido_actual = $_POST['NombreRecibePedido'];
    $codigoPostal_actual = $_POST['CodigoPostal'];
    $telefono_actual = $_POST['Telefono'];

    // Crea una instancia de la clase Productos
    $productos = new Productos();

    // Llama a la función ModificarPedidos con los nuevos datos
    $respuesta = $productos->ModificarPedidos($id, $direccion, $nombreRecibePedido, $codigoPostal, $telefono);

    // Verifica la respuesta y redirige según el resultado
    if ($respuesta) {
        echo "<script>alert('Modificación correcta');</script>";
        header("Location: ../Productos/administrarP.php");
    } else {
        echo "<script>alert('Error al modificar');</script>";
        header("Location: editarPe.php?id=$id"); // Redirige a la página de edición con el mismo id
    }
} else {
    // Si no se enviaron datos por POST, redirige a la página de edición
    header("Location: editarPe.php");
}
?>