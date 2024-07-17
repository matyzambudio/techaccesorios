<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .barra {
        font-family: "Roboto", sans-serif;
        font-style: normal;
        background: linear-gradient(to bottom, black,rgba(24, 182, 27, 0.896));
        display: flex;
        align-items: center;
        margin-top: 0;
        margin-bottom: 0;
    }

    .barra img {
        width: 100px;
        height: auto;
        margin: 8px 10px 8px 8px;
    }

    .barra a {
        /* Anula el color azul predeterminado de los enlaces en Bootstrap */
        color: white !important;
    }

    * {
        font-size: 1.1em;
    }

    .nav-link {
        text-decoration: none;
        color: white;
        animation: navtitle 5s ease-in-out infinite;
    }

    .nav-item:hover .nav-link {
        animation-play-state: paused;
        /* Pausa la animación al pasar el cursor */
        color: green;
        font-size: 30px;
    }

    @keyframes navtitle {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }
</style>
</head>

<body>
    <div class="barra">
        <img class="border border-success rounded-top" src="imgFondo/imglogo.jpeg">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#celulares">Celulares</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#accesorios">Accesorios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contacto" tabindex="-1">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#redes" tabindex="-1">Redes</a>
            </li>
        </ul>
    </div>