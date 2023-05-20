<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once '../conexion.php';
    $idUsuario = $_GET["idUsuario"];
    $nombres = $_GET["nombres"];
    $apellidos = $_GET["apellidos"];
    $correo = $_GET["correo"];
    $usuario = $_GET["usuario"];
    $contraseña = $_GET["contraseña"];
    $rol = $_GET["rol"];

    $query =
    "UPDATE usuario SET 
    nombres = '$nombres', 
    apellidos = '$apellidos', 
    correo = '$correo',
    usuario = '$usuario',
    contraseña = '$contraseña',
    rol = $rol
    WHERE idUsuario = $idUsuario";

    $result = $mysql->query($query);

    if ($result == true) {
        echo "Usuario editado satisfactoriamente...";
    } else {
        echo "Error al editar usuario...";
    }
} else {
    echo "Error desconocido";
} 
