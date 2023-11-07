<?php
$Nombre = $_POST['Nombre'];
$Modelo = $_POST['modelo'];
$Precio = $_POST['precio'];

// Verifica si se ha enviado un archivo
if(isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
    $imgName = $_FILES['img']['name'];
    $imgPath = "../img/productos/";

    // Crea la carpeta si no existe
    if (!is_dir($imgPath)) {
        mkdir($imgPath, 0777, true);
    }

    // Mueve el archivo a la ubicación específica
    move_uploaded_file($_FILES['Img']['tmp_name'], $imgPath . $imgName);

    // Ahora $imgPath contiene la ruta donde se guardó la imagen
    $Img = $imgPath . $imgName;
} else {
    // Manejo del caso en que no se haya enviado ninguna imagen
    $Img = ""; // Puedes asignar un valor predeterminado o manejarlo según tus necesidades
}

// Llamada a la función InsertarP con la ruta de la imagen
include_once "../Core/Usuario.php";
$usuario = new Usuario();
$respuesta = $usuario->InsertarP($Nombre, $Modelo, $Precio, $Img);

if($respuesta == true){
    echo "<script>alert('Producto agregado');</script>";
    header("Location: ../P_Enlace/Catalogo.php");
} else {
    header("Location: registrarP.php");
}
?>