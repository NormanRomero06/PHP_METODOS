<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    require_once 'connection.php'; 
    $idTransaccion = $_GET["idTransaccion"];
    $my_query = "select * from caja where idTransaccion ='" .$idTransaccion."'";

    $result = $mysql -> query($my_query);
    
    if($mysql -> affected_rows > 0){
        while($row = $result-> fetch_assoc()){
            $array = $row;
        }
        echo json_encode($array);
    }else{
        echo "Eror";
    }
}