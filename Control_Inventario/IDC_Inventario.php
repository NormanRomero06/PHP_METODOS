<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    require_once '../conexion.php'; 
    $idInventario = $_GET["idInventario"];
    $my_query = "select * from inventario where idInventario ='" .$idInventario."'";

    $result = $mysql -> query($my_query);
    
    if($mysql -> affected_rows > 0){
        while($row = $result-> fetch_assoc()){
            $array = $row;
        }
        echo json_encode($array);
    }else{
        echo "Error en la busqueda";
    }
}
?>