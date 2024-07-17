<?php 

include('../bd.php');

$ID = $_GET['ID'];

$consulta = "DELETE FROM celulares WHERE id = $ID";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);

header("location:index.php");
