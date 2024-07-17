<?php
session_start();
// Verifica si el usuario tiene una sesión de administrador activa
if (isset($_SESSION['tecmendoza2024@gmail.com'])) {
    // Cierra la sesión de administrador
    session_destroy();  
    header("Location: /index.php"); 
    exit();
} else {
    header("Location: ../index.php");
    // Si el usuario no tiene una sesión de administrador activa, puedes redirigirlo a una página de error o mostrar un mensaje adecuado
    
}
?>
