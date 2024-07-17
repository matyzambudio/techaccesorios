<?php
include('admin/funciones.php');

$email = "";
$pass = "";

if ($_POST) {
    $errores = logear($_POST);

    //variables para persistencia
    $email = $_POST['email'];
    $pass = $_POST['pass'];
} ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
<link href="../Celulares/admin/adminstylo.css" rel="stylesheet">


 <div class="menu-login">
        <form class="formulario" action="login.php" method="POST" enctype="multipart/form-data">
            <div class="">
                <label for="" class="form-label">Email:</label>
                <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                <label for="" class="form-label">Contraseña:</label>
                <input type="pass" class="form-control" name="pass" placeholder="Ingrese Contraseña">

                <label for="" class="form-label">Ingrese el siguiente texto:</label>
                <img src="admin/captcha.php">
                <input type="text" class="form-control" name="captcha">
            </div>
            <input class="boton-enviar" href="/admin/dashbord.php" type="submit" value="ENVIAR">
        </form>
    </div>
