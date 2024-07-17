<?php

$pass = "CLAVE!";

$hash = password_hash($pass, PASSWORD_DEFAULT);

echo "Primer intento: ".$hash;

echo "<br>";

$resultado = password_verify("buenosaires65Mendoza", $hash);

var_dump($resultado);

?>