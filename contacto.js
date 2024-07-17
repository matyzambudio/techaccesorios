
document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("miFormulario");

  form.addEventListener("submit", function(event) {
      event.preventDefault(); // Evita que el formulario se envíe automáticamente

      // Validación de campos
      const nombre = document.getElementById("nombre").value.trim();
      const apellido = document.getElementById("apellido").value.trim();
      const email = document.getElementById("email").value.trim();
      const consulta = document.getElementById("consulta").value.trim();

      if (nombre === "" || apellido === "" || email === "" || consulta === "") {
          alert("Por favor, complete todos los campos.");
          return;
      }

      // Validación de correo electrónico
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
          alert("Por favor, ingrese un correo electrónico válido.");
          return;
      }

      // Si los datos son válidos, enviar formulario
      enviarFormulario();
  });

  function enviarFormulario() {
      const formData = new FormData(form);
      const xhr = new XMLHttpRequest();

      xhr.open("POST", "tu_archivo_php.php", true);
      xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE) {
              if (xhr.status === 200) {
                  alert("¡Formulario enviado correctamente!");
                  form.reset(); // Limpiar el formulario después del envío
              } else {
                  alert("Error al enviar el formulario. Por favor, inténtelo de nuevo más tarde.");
              }
          }
      };

      xhr.send(formData);
  }
});



