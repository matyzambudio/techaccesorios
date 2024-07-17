<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TecH Accesorios Mendoza</title>
  <meta name="author" content="Matías Zambudio" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<style>
  *{
      font-family: "Roboto", sans-serif;
      font-style: normal;
    }
    .bg{
      background-color: rgba(12, 154, 15, 0.896);
    }
</style>

<body>
  <div id="#index"><?php include('barra.php'); ?></div>
  <div><?php include('fondo.php'); ?></div>
  <div class="bg text-dark">
    <div id="celulares"><?php include('celulares.php'); ?></div>
    <div id="accesorios"><?php include('accesorios.php'); ?></div>
    <div id="contacto"><?php include('contacto.php'); ?></div>
  </div>
  <div id="redes"><?php include('ubicacion.php'); ?></div>
  <div><?php include('fotter.php') ;?></div>
  <script src="script.js"></script>
  <script src="fondo.js"></script>
</body>

</html>