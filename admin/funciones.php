<?php

   function logear($datos)   ///////////FUNCIONAAAA////
   {
    /*tecmendoza2024@gmail.com - Siemprequellovioparo */
    session_start();
    $email = $datos['email'];
    $pass =  $datos['pass'];
    $captcha = $datos['captcha'];
    $errores = [];
    //validamos los datos
    if ($email == NULL || $email == "") {
        array_push($errores, "Debe completar el email");
    }
    if ($email != NULL) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            array_push($errores, "El formato de email no es válido");
        }
    }
    if ($pass == NULL || $pass == "") {
        array_push($errores, "Debe completar el pass");
    }

    //Si no hay errores
    if ($errores == NULL) {
        //hacemos la consulta a la BD
        include('bd.php');
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $consulta =  mysqli_query($conexion, $sql);
        mysqli_close($conexion);

        $rta = mysqli_fetch_array($consulta);
        // Si rta no es null, es decir que trajo un dato

        if ($rta != NULL) {
            //verificamos captcha
            if ($captcha != $_SESSION['captcha']) {
                array_push($errores, "Los códigos no coinciden");
            } else {

                //verificarmos constraseña
                $verifcar = password_verify($pass, $rta['pass']);
                if ($email == $rta['email'] && $verifcar == TRUE) {
                    //si esta todo ok, iniciamos sesion
                    session_start();
                    $_SESSION = $rta;
                    // reenviamos al panel de control
                    header('location: admin/dashbord.php');
                    exit;
                } else {

                    array_push($errores, "Las contraseñas no coinciden");
                }
            }
        } else {
            echo "<script language='javascript'>
                alert('NO SE PUDO INGRESAR!');
                location.assign('menuprincipal.php');
            </script>";
        exit;
        }
        
    }

    return $errores;
}



function Nuevocelu()
{
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $errores = [];
    if ($titulo == NULL || $titulo == "") {
        array_push($errores, "Ingrese un título");
    }
    if ($precio == NULL || $precio == "") {
        array_push($errores, "Ingrese un precio");
    }
    if ($descripcion == NULL || $descripcion == "") {
        array_push($errores, "Ingrese una descripción");
    }

    if ($_FILES) {
        if ($_FILES['icono']['error'] != 0) { // HAY UN ERRO

            array_push($errores, "Hubo un error al cargar el archivo");
        } else { //NO hay error
            $ext = pathinfo($_FILES['icono']['name'], PATHINFO_EXTENSION);
            // Genera un nombre único para la imagen

            $nombreImagen = uniqid() . '.' . $ext;
            // Ruta donde se guardará la imagen (puedes ajustar la ruta según tu necesidad)
            $imgservicio = '../../imgcelulares/';
            $rutaImagen = $imgservicio . $nombreImagen;

            // Crea el directorio si no existe
            if (!is_dir($imgservicio)) {
                mkdir($imgservicio, 0777, true);
            }

            // Mueve la imagen a la ubicación deseada
            if (move_uploaded_file($_FILES['icono']['tmp_name'], $rutaImagen)) {
                include('bd.php');


                $sql = "INSERT INTO celulares (icono, titulo, precio, descripcion)
                     VALUES ('$rutaImagen ', '$titulo', '$precio', '$descripcion')";


                if (mysqli_query($conexion, $sql)) {
                    array_push($errores, "Servicio registrado con éxito");
                } else {
                    array_push($errores, "Error al guardar el servicio en la base de datos");
                }
                mysqli_close($conexion);
            }
        }
        header("location:index.php");
    }
    
    return $errores;
}


function Nuevoaccesorios()
{
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $errores = [];
    if ($titulo == NULL || $titulo == "") {
        array_push($errores, "Ingrese un título");
    }
    if ($precio == NULL || $precio == "") {
        array_push($errores, "Ingrese un precio");
    }
    if ($descripcion == NULL || $descripcion == "") {
        array_push($errores, "Ingrese una descripción");
    }

    if ($_FILES) {
        if ($_FILES['icono']['error'] != 0) { // HAY UN ERRO

            array_push($errores, "Hubo un error al cargar el archivo");
        } else { //NO hay error
            $ext = pathinfo($_FILES['icono']['name'], PATHINFO_EXTENSION);
            // Genera un nombre único para la imagen

            $nombreImagen = uniqid() . '.' . $ext;
            // Ruta donde se guardará la imagen (puedes ajustar la ruta según tu necesidad)
            $imgservicio = '../../imgaccesorios/';
            $rutaImagen = $imgservicio . $nombreImagen;

            // Crea el directorio si no existe
            if (!is_dir($imgservicio)) {
                mkdir($imgservicio, 0777, true);
            }

            // Mueve la imagen a la ubicación deseada
            if (move_uploaded_file($_FILES['icono']['tmp_name'], $rutaImagen)) {
                include('bd.php');


                $sql = "INSERT INTO accesorios (icono, titulo, precio, descripcion)
                     VALUES ('$rutaImagen ', '$titulo', '$precio', '$descripcion')";


                if (mysqli_query($conexion, $sql)) {
                    array_push($errores, "Servicio registrado con éxito");
                } else {
                    array_push($errores, "Error al guardar el servicio en la base de datos");
                }
                mysqli_close($conexion);
            }
        }
        header("location:index.php");
    }
    
    return $errores;
}