<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $idUsuario = $_POST["idUsuario"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $usurio = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $rol = $_POST["rol"];
    
    $query =
    "UPDATE categoria SET nombres = ?, apellidos = ?, correo = ?, usuario = ?, contraseña = ?, rol = ? WHERE idUsuario = ?";

  $result = $mysql->execute_query($query, [
    $nombres,
    $apellidos,
    $correo,
    $usurio,
    $contraseña,
    $rol,
    $idUsuario,
  ]);
    
    if($result == true){
        echo "Registro editado satisfactoriamente...";
    }else{
        echo"Error al editar registro...";
    }
}else{
    echo"Error desconocido";
}