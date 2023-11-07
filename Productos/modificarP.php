<?php
// Verifica si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluye el archivo usuario.php
    include_once "../Core/Usuario.php";

    // Obtén los datos del formulario
    $id = $_POST['id'];
    $nombre = $_POST['Nombre'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    // Verifica si se ha enviado un nuevo archivo
    if(isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        $imgTmp = $_FILES['img']['tmp_name'];
        $imgName = $_FILES['img']['name'];
        $imgPath = "../img/productos/";

        // Comprueba si el archivo es una imagen
        $imgFileType = strtolower(pathinfo($imgPath . $imgName, PATHINFO_EXTENSION));
        if($imgFileType != "png" && $imgFileType != "jpg" && $imgFileType != "jpeg" && $imgFileType != "webp") {
            echo "Solo se permiten archivos PNG, JPG, JPEG y WEBP.";
            exit;
        }

        // Crea la carpeta si no existe
        if (!is_dir($imgPath)) {
            mkdir($imgPath, 0777, true);
        }

        // Mueve el archivo a la ubicación específica
        move_uploaded_file($imgTmp, $imgPath . $imgName);

        // Ahora $imgPath contiene la ruta donde se guardó la imagen
        $img = $imgPath . $imgName;
    } else {
        // Si no se envió un nuevo archivo, mantiene la imagen actual
        $img = ""; // O asigna el valor actual según tu lógica
    }

    // Crea una instancia de la clase Usuario
    $usuario = new Usuario();

    // Llama a la función ModificarProducto con los nuevos datos
    $respuesta = $usuario->ModificarP($id, $nombre, $modelo, $precio, $img, $descripcion);

    // Verifica la respuesta y redirige según el resultado
    if ($respuesta) {
        echo "<script>alert('Producto modificado');</script>";
        header("Location: ../P_Enlace/Catalogo.php");
    } else {
        echo "<script>alert('Error al modificar el producto');</script>";
        header("Location: editarproducto.php?id=$id"); // Redirige a la página de edición con el mismo id
    }
} else {
    // Si no se enviaron datos por POST, redirige a la página de edición
    header("Location: editarproducto.php");
}
?>