<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("BD","tech");

// Intenta conectarte a la base de datos
$conexion = mysqli_connect(HOST, USER, PASS, BD);

// Verifica si la conexión fue exitosa
if (!$conexion) {
    // Si no se pudo conectar, muestra un mensaje de error y termina la ejecución del script
    exit("No se pudo conectar a la BD: " . mysqli_connect_error());
}
?>

