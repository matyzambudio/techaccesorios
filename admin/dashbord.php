<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
    body {
        background: linear-gradient(to bottom, black, green);
    }

    .card-img-top {
        padding: 2%;
        height: 250px;
        object-fit: cover;
    }

    .card {
        flex: 1;
        border-radius: 20px;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .footer {
        margin-top: 20px;
        margin-bottom: 20px;
        display: flex;
        justify-content: center;
    }
</style>
</head>

<body>
    <div class="container mt-5">
        <div class="card-group">
            <div class="card m-3">
                <img src="img-admin/celumenu.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bolder f-2 text-center">Celulares</h5>
                    <div class="d-grid gap-2">
                        <button onclick="window.location.href='celu/index.php'" type="button" class="btn btn-outline-primary">Ir a Tabla</button>
                    </div>
                </div>
            </div>
            <div class="card m-3">
                <img src="img-admin/accesoriomenu.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bolder f-2 text-center">Accesorios</h5>
                    <div class="d-grid gap-2">
                        <button onclick="window.location.href='accesorios/index.php'" type="button" class="btn btn-outline-primary">Ir a Tabla</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <a href="../index.php" class="btn btn-success btn-outline-dark text-white">Volver a Inicio</a>
        </div>
    </div>
</body>