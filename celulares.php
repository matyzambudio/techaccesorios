<?php include('./admin/bd.php');
$sql = $conexion->prepare("SELECT * FROM celulares");
$sql->execute();
$celulares = $sql->get_result();
$lista = $celulares->fetch_all(MYSQLI_ASSOC);
?>
<link rel="stylesheet" href="cardstylos.css">
<div class="menuseccion">
    <h1 class="tituloseccion">Celulares</h1>
</div>
<div class="row row-cols-1 row-cols-md-3 g-3 mx-5 my-2">
    <?php foreach ($lista as $celulares) { ?>
        <div class="col">
            <div class="card h-100">
                <div class="d-flex flex-column justify-content-start align-items-center"> <!-- Ajustamos las clases para centrar verticalmente y horizontalmente -->
                    <div><img src="admin/imgcelulares/<?php echo $celulares['icono']; ?>" class="img-thumbnail" style="width: 200px; height: 150px;"></div>
                    <div class="card-body">
                        <h3 class="card-title text-center"><?php echo $celulares['titulo']; ?></h3>
                        <h5 class="card-text"><?php echo $celulares['descripcion']; ?></h5>
                        <h4>
                            <p class="precio">$ <?php echo $celulares['precio']; ?></p>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>