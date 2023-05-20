<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $rol = $_POST["rol"];
    $my_query = "insert into usuario(nombres, apellidos, correo, usuario, contraseña, rol) 
    values ('".$nombres."', '".$apellidos."', '".$correo."', '".$usuario."', '".$contraseña."', '".$rol."')";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Usuario guardado satisfactoriamente...";
    }else{
        echo "Error al guardar usuario...";
    }
}else{
    echo"Error desconocido";
}
?>