<?php
    $id=$_GET['id'];
    include_once '../Core/Usuario.php';
    $user=new Usuario();
    $resultado=$user->EliminarP($id);
    if($resultado==true){
        header("Location: ../P_Enlace/Catalogo.php");
    }
?>