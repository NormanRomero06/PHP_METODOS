<?php
if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    require_once '../conexion.php';
    $idCategoria = $_GET["idCategoria"];
    $my_query = "DELETE from categoria where idCategoria = $idCategoria";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Categoria Eliminada...";
    }else{
        echo "Error al eliminar Categoria...";
    }

}else{
    echo"Error desconocido";
}
?>