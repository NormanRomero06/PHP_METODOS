<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
      require_once '../conexion.php' ;
      $my_query = "SELECT cierrecaja.fechaHora AS'Fecha y hora', cierrecaja.totalEfectivoCaja AS 'Total dinero en caja', egresos.Monto AS 'Egresos', caja.montoTransaccion AS 'Ingresos'
      FROM cierrecaja 
      INNER JOIN egresos
      ON cierrecaja.Egresos_idPagos = egresos.idPagos
      INNER JOIN caja
      on cierrecaja.Caja_idTransaccion =caja.idTransaccion";
      $result = $mysql->query($my_query);
      if ($mysql->affected_rows > 0) {
          $json = "{\"data\":[";
        while ($row = $result->fetch_assoc()){
            $json = $json.json_encode($row);
            $json=$json.",";
        }
         $json=substr(trim($json),0,-1);
         $json = $json."]}";
        }
echo $json;
$result->close();
$mysql->close();

    }

?>
