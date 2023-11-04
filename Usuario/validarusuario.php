<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Aquí debes incluir la lógica para autenticar al usuario
    // (consulta a la base de datos, verificación de credenciales, etc.)

    // Ejemplo simple de autenticación (debes personalizar esto)
    $usuario_autenticado = true;

    if ($usuario_autenticado) {
        // Almacenar datos en la sesión
        $_SESSION["correoUsuario"] = $correo;
        $_SESSION["tipoUsuario"] = "tipo_usuario";  // Debes personalizar esto

        // Redirigir al usuario al index.php
        header("Location: ../index.php");
        exit();
    } else {
        // Usuario no autenticado, redirigir al login.php
        header("Location: ../login.php");
        exit();
    }
} else {
    // Si alguien intenta acceder directamente a este script, redirigir al login.php
    header("Location: ../login.php");
    exit();
}
?>