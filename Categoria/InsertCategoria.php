<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $nombre = $_POST["nombres"];
    $apellidos = $_POST["imagen"];
    $my_query = "insert into categoria(nombre, imagen) 
    values('".$nombre."', '".$imagen."')";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro guardado satisfactoriamente...";
    }else{
        echo "Error al guardar registro...";
    }
}else{
    echo"Error desconocido";
}
?>