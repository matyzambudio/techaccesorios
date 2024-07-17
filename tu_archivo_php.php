<?php
// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$consulta = $_POST['consulta'];

// Dirección de correo electrónico a la que se enviará el formulario
$destinatario = "techaccesoriosmza2022@gmail.com";

// Asunto del correo electrónico
$asunto = "Nuevo mensaje de consulta";

// Contenido del correo electrónico
$mensaje = "Nombre: $nombre\n";
$mensaje .= "Apellido: $apellido\n";
$mensaje .= "Correo electrónico: $email\n";
$mensaje .= "Consulta:\n$consulta\n";

// Cabeceras del correo electrónico
$headers = "From: $nombre <$email>";

// Enviar correo electrónico
$mailEnviado = mail($destinatario, $asunto, $mensaje, $headers);

// Comprobar si el correo electrónico se ha enviado correctamente
if ($mailEnviado) {
    http_response_code(200); // OK
} else {
    http_response_code(500); // Error del servidor
}
?>
