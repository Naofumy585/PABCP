<?php
    $id=$_GET['id'];
    include_once '../Core/FProductos.php';
    $user=new Productos();
    $resultado=$user->EliminarPedidos($id);
    if($resultado==true){
        header("Location: administrarP.php");
    }
?>