<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $cantidad = $_POST["cantidad"];
    $cantidadMinima = $_POST["cantidadMinima"];
    $imagen = $_POST["imagen"];
    $Categoria_idCategoria  = $_POST["Categoria_idCategoria"];
    $my_query = "insert into producto(nombre, precio, descripcion, cantidad, cantidadMinima, imagen, Categoria_idCategoria ) 
    values('".$nombre."', '".$precio."', '".$descripcion."', '".$cantidad."', '".$cantidadMinima."', '".$imagen."', '".$Categoria_idCategoria."')";
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