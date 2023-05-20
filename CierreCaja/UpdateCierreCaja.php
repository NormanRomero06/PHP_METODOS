<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
  $idCierres = $_GET["idCierres"];
  $fechaHora = $_GET["fechaHora"];
  $totalEfectivoCaja = $_GET["totalEfectivoCaja"];
  $Egresos_idPagos = $_GET["Egresos_idPagos"];
  $Caja_idTransaccion = $_GET["Caja_idTransaccion"];

    $query =
  "UPDATE cierrecaja SET fechaHora = '$fechaHora', totalEfectivoCaja = '$totalEfectivoCaja', Egresos_idPagos = '$Egresos_idPagos', Caja_idTransaccion = '$Caja_idTransaccion'  WHERE idCierres = $idCierres";

  $result = $mysql->query($query);
    
    if($result == true){
        echo "Registro editado satisfactoriamente...";
    }else{
        echo"Error al editar registro...";
    }
}else{
    echo"Error desconocido";
}
