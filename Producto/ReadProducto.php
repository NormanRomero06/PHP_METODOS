<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    require_once '../conexion.php';
    $my_query = "SELECT producto.idProducto, producto.nombre, producto.precio, producto.descripcion, producto.cantidad, producto.imagen, categoria.nombre AS 'Categoria Nombre'
    FROM producto
    INNER JOIN categoria
    ON producto.Categoria_idCategoria = categoria.idCategoria";
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