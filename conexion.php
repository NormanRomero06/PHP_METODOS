<?php

$mysql = new mysqli("localhost", "root", "", "favabd");
if ($mysql->connect_error) {
  echo "Error: ";
  die("Error de conexion\n");
} else {
}
?>