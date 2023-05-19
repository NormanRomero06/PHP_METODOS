<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    require_once '../conexion.php'; 
    $idCategoria = $_GET["idCategoria"];
    $my_query = "select * from categoria where idCategoria ='" .$idCategoria."'";

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