<?php include('../bd.php');
//selecciona todo de la tabla de servicios ! 
$sql = "SELECT * FROM accesorios";
$rta = mysqli_query($conexion, $sql);
mysqli_close($conexion);
?>
<style>
    *{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: black;
    }
    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

<div class="card bg-success bg-gradient" style="--bs-bg-opacity: .3;">
    <div class="card-header my-2">
        <a class="btn btn-primary d-grid gap-2 col-6 mx-auto my-2" href="accesoriocrear.php" role="button">Agregar Nuevo </a>
        <div class="table-responsive mx-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Caracteristicas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($consulta = mysqli_fetch_array($rta)) {
                        echo "
                            <tr>
                                <th>" . $consulta['id'] . "</th>
                                <td><img src='" . $consulta['icono'] . "' width='100' height='100'></td>
                                <td>" . $consulta['titulo'] . "</td>
                                <td>" . $consulta['precio'] . "</td>
                                <td>" . $consulta['descripcion'] . "</td>
                                <td>
                                    <a class='btn btn-success' href='editar.php?ID=" . $consulta['id'] . "'>Modificar</a>
                                    <a class='btn btn-danger' href='eliminar.php?ID=" . $consulta['id'] . "'>Eliminar</a>
                                </td>
                            </tr>
                            ";
                    }
                    ?>
                </tbody>
            </table>
        </div> <br>
        <a class="btn btn-primary  d-grid gap-2 col-6 mx-auto" href="../dashbord.php" role="button">Volver </a>
    </div>
</div>