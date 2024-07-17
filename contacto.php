<script src="contacto.js"></script>
<style>
  .contenedor {
    padding: 2%;
    display: flex;
    justify-content: center;
    height: auto;
  }

  .formulario {
    font-size: 16px;
    width: 60%;
    background: linear-gradient(to bottom, rgb(118, 118, 118), rgb(255, 255, 255));
    padding: 2%;
    border-radius: 20px 0;
    opacity: 0;
    animation: formuani 5s forwards;
  }

  @keyframes formuani {
    to {
      opacity: 1;
    }
  }

  .form-group {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .input-field {
    display: flex;
    align-items: center;
  }

  .input-field label {
    width: 120px;
  
  }

  .input-field input {
    flex: 1;
    border-radius: 15px 0;
    padding: 2px;
  }

  .botonForm {
    align-self: center;
    width: 40%;
    height: 15%;
    border-radius: 20px;
    background-color: rgb(1, 71, 4);
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;

  }

  .botonForm:hover {
    background-color: rgb(120, 243, 126);
    color: black;

  }

  .botonForm:active {
    transform: scale(0.95);
    /* Reduce ligeramente el tamaño del botón cuando se hace clic */
  }

  /* Estilos específicos para dispositivos móviles */
  @media screen and (max-width: 768px) {
    .contenedor {
      padding: 5%;
      height: auto;
    }

    .formulario {
      flex: 2;
      text-align: center;
      width: 90%;
      height: auto;
      margin: 0 5%;
      /* Reducir el ancho para dispositivos móviles */
    }

    .input-field label {
      font-size: 20px;
      width: 30%;
      /* Ajustar el ancho del label para dispositivos móviles */
    }

    .input-field input {
      width: 70%;
      font-size: 15px;
      /* Tamaño de fuente más pequeño para campos de entrada */
    }
  }
</style>
<div class="tituloseccion">Contacto</div>
<div class="contenedor">
  <div class="formulario">
    <form action="tu_archivo_php.php" method="post" id="miFormulario">
      <div class="form-group">
        <div class="input-field">
          <label for="nombre">Nombre: </label>
          <input type="text" id="nombre" name="nombre" placeholder="  Ingrese Nombre" required>
        </div>

        <div class="input-field">
          <label for="apellido">Apellido: </label>
          <input type="text" id="apellido" name="apellido" placeholder="  Ingrese Apellido" required>
        </div>

        <div class="input-field">
          <label for="email">E-mail: </label>
          <input type="email" id="email" name="email" placeholder="  Ingrese Email" required>
        </div>

        <div class="input-field">
          <label for="consulta">Consulta:  </label>
          <input class="cuadroconsulta text-break" type="text" id="consulta" name="consulta" placeholder="  Ingrese su consulta" required></input>
        </div>

        <button type="submit" class="botonForm">Enviar</button>
      </div>
    </form>
  </div>
</div>