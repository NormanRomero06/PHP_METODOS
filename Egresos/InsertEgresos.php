<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $descripcion = $_POST["descripcion"];
    $monto = $_POST["monto"];
    $fechaHora = $_POST["fechaHora"];
    $my_query = "insert into egresos(descripcion, monto, fechaHora) 
    values('".$descripcion."', '".$monto."','".$fechaHora."')";
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