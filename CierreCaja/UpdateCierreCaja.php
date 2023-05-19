<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $idCierres = $_POST["idCierres"];
    $fechaHora = $_POST["fechaHora"];
    $totalEfectivoCaja = $_POST["totalEfectivoCaja"];
    $Egresos_idPagos = $_POST["Egresos_idPagos"];
    $Caja_idTransaccion = $_POST["Caja_idTransaccion"];

    $query =
    "UPDATE cierrecaja SET idCierres = ?, fechaHora = ?, totalEfectivoCaja = ?, Egresos_idPagos = ?, Caja_idTransaccion = ?  WHERE idCierres = ?";

  $result = $mysql->execute_query($query, [
    $idCierres,
    $fechaHora,
    $totalEfectivoCaja,
    $Egresos_idPagos,
    $Caja_idTransaccion,
  ]);
    
    if($result == true){
        echo "Registro editado satisfactoriamente...";
    }else{
        echo"Error al editar registro...";
    }
}else{
    echo"Error desconocido";
}
