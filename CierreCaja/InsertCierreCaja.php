<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $fechaHora = $_POST["fechaHora"];
    $totalEfectivoCaja = $_POST["totalEfectivoCaja"];
    $Egresos_idPagos = $_POST["Egresos_idPagos"];
    $Caja_idTransaccion = $_POST["cantidadMinima"];
    $my_query = "insert into cierrecaja(fechaHora, totalEfectivoCaja, Egresos_idPagos, Caja_idTransaccion) 
    values('".$fechaHora."', '".$totalEfectivoCaja."''".$Egresos_idPagos."', '".$Caja_idTransaccion."')";
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