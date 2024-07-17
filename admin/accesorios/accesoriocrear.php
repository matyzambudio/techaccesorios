<?php include('../funciones.php');
$errores = [];
if ($_POST) {
    $errores = Nuevoaccesorios();
    if (empty($errores)) {
        header("Location: index.php");
        exit();
    }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    * {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: black;
        font-size: 15px;
    }

    label {
        font-family: cursive;
        font-size: 20px;
    }

    input {
        font-family: 'Courier New', Courier, monospace;
        font-size: 15px;
    }
</style>
<div class="container bg-success bg-gradient mx-auto my-5" style="--bs-bg-opacity: .7;">
    <div class="col-row row-col-sm-1">
        <h1 class="">Accesorios</h1>
    <div>
            <div class="card-body border border-light rounded-start p-3 mb-2">
                 <form action="accesoriocrear.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="icono" class="form-label">Icono </label>
                        <input type="file" class="form-control" name="icono" id="icono">
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" class="form-control" name="titulo" id="titulo">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" name="precio" id="precio">
                    </div>
                    <button type="submit" class="btn btn-success" value="accesoriocrear">Agregar</button>
                    <a class="btn btn-primary" href="./../dashbord.php" role="button">Cancelar </a>
                </form>
                <?php if (!empty($errores)) : ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        <ul>
                            <?php foreach ($errores as $error) : ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div><br>
    </div>
</div>
</body>

</html>