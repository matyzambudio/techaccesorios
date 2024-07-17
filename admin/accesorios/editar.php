<?php
include('../bd.php');

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];

    $sql = $conexion->prepare("SELECT * FROM accesorios WHERE ID = ?");
    $sql->bind_param("i", $id);
    $sql->execute();
    $resultado = $sql->get_result();
    $accesorios = $resultado->fetch_assoc();

    // se fija se envió el formulario de edición
    if (isset($_POST['editar'])) {
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];

        // Actualizar los datos de la base de datos
        $sql = $conexion->prepare("UPDATE accesorios SET
        titulo = ?,
        precio = ?,
        descripcion = ?
        WHERE ID = ?");
        $sql->bind_param("sssi", $titulo, $precio, $descripcion, $id);
        $sql->execute();

        // Redireccionar a la página principal después de editar el servicio
        header("Location: index.php");
        exit();
    }
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        h2 {
            font-family: 'Times New Roman', Times, serif;
            font-weight: 10px;
        }

        label {
            font-family: cursive;
            font-size: 25px;
            margin-left: 10px;
        }

        input {
            font-family: 'Courier New', Courier, monospace;
            font-size: 20px;
        }
    </style>

    <div class="card bg-success bg-gradient" style="--bs-bg-opacity: .3;">
        <div class="card bg-success bg-gradient m-5" style="--bs-bg-opacity: .7;">
            <div class="card-header bg-success text-center">
                <h2>Modificar Accesorios</h2>
            </div>
            <div>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $accesorios['titulo']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio: </label>
                        <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $accesorios['precio']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input class="form-control" id="descripcion" name="descripcion" value="<?php echo $accesorios['descripcion']; ?>">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" name="editar" class="btn btn-primary gap-1">Guardar Cambios</button>
                        <a href="../dashbord.php" class="btn btn-secondary gap-1">Volver</a>
                    </div>
                </form>
            </div>

        </div>


    <?php } else {
    // Si no se proporciona el ID, redireccionar a la página principal
    header("Location: editar.php");
    exit();
}
    ?>