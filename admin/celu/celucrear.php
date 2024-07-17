<?php include('../funciones.php');
if ($_POST) {
    $errores = Nuevocelu();
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
        <h1 class="text-center">Celulares</h1>
        <div>
            <div class="card-body border border-light rounded-start p-3 mb-2">
                <form action="celucrear.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="icono" class="form-label">Icono:</label>
                        <input type="file" class="form-control" name="icono" id="icono">
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo:</label>
                        <input type="text" class="form-control" name="titulo" id="titulo">
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion:</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="num" class="form-control" name="precio" id="precio">
                    </div>
            </div>
            <div class="row align-items-center m-1">
                <div class="col-6">
                    <button type="submit" name="editar" class="btn btn-primary gap-1 m-2">Guardar Cambios</button>
                </div>
                <div class="col-6">
                    <a href="./index.php" class="btn btn-secondary gap-1 m-2">Volver</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>