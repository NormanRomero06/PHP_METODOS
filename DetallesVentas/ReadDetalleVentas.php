<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    require_once '../conexion.php';
    $my_query = "SELECT producto.nombre AS 'Nombre', producto.descripcion AS 'Descripcion', detallesventa.precioUnitario AS 'Precio Unitario', detallesventa.cantidadVendida AS 'Cantidad Vendida'
    From detallesventa
    INNER JOIN producto
    on detallesventa.Producto_idProducto = producto.idProducto";
    $result = $mysql->query($my_query);
    if ($mysql->affected_rows > 0) {
        $json = "{\"data\":[";
        while ($row = $result->fetch_assoc()){
            $json = $json.json_encode($row);
            $json=$json.",";
        }
        $json = substr(trim($json), 0, -1);
        $json = $json . "]}";
        }
echo $json;
$result->close();
$mysql->close();

    }
?>