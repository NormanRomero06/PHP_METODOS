<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
      require_once 'conexion.php' ;
      $my_query = "SELECT producto.nombre AS 'Producto', detallesventa.cantidadVendida AS 'Cantidad Vendida', detallesventa.precioUnitario AS 'Precio Unitario', venta.totalVenta AS 'Total Venta', usuario.usuario
      from venta
      INNER join detallesventa
      on venta.DetalleVenta_idDetalleVenta = detallesventa.idDetalleVenta
      INNER JOIN producto
      on detallesventa.Producto_idProducto = producto.idProducto
      INNER JOIN usuario
      on venta.Usuario_idUsuario = usuario.idUsuario";
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