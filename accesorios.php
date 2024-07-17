<?php
$sql = $conexion->prepare("SELECT * FROM accesorios");
$sql->execute();
$accesorios = $sql->get_result();
$lista = $accesorios->fetch_all(MYSQLI_ASSOC);
?>

<div class="menuseccion">
    <h1 class="tituloseccion">Accesorios</h1>
</div>
<div class="row row-cols-1 row-cols-md-3 g-3 mx-5 my-2">
    <?php foreach ($lista as $accesorios) { ?>
        <div class="col">
            <div class="card h-100">
                <div class="d-flex justify-content-center align-items-start">
                <div><img src="admin/imgcelulares/<?php echo $accesorios['icono']; ?>" class="img-thumbnail mx-3" style="width: 200px; height: 150px;"></div>
                </div>
                <div class="card-body">
                    <h3 class="card-title text-center"><?php echo $accesorios['titulo']; ?></h3>
                    <h5 class="card-text"><?php echo $accesorios['descripcion']; ?></h5>
                    <h4>
                        <p class="precio">$ <?php echo $accesorios['precio']; ?></p>
                    </h4>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

