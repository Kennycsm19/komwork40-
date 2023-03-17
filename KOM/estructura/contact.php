<section id="contact">
  <div class="formgrid">
    <div class="formcontainer">
      <div class="contactcontainer">
        <p>¿Preguntas?¡Te asesoramos<span>gratis!</span></p>
      </div>
      <form method="post" action="guardar_datos.php">
        <label for="nombre">Ingresa tu Nombre*</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="apellido">Ingresa yu Apellido*</label>
        <input type="text" name="apellido" id="apellido" required>
        <label for="whatsapp">Ingresa tu Teléfono*</label>
        <input type="text" name="whatsapp" id="whatsapp" required>
        <label for="correo">Ingresa tu correo*</label>
        <input type="email" name="correo" id="correo" required>
        <label for="empresa">Ingresa el nombre de la empresa*</label>
        <input type="text" name="empresa" id="empresa" required>
        <label>
        <input type="checkbox" name="acepta_terminos" required>Aceptas los Términos y Condiciones</label>
        <button type="submit">Enviar datos</button>
      </form>
    </div>
    <div class="ifdiv">
      <div class="marifdiv">
        <p>Si prefieres llámanos o escribenos...</p>
        <p>Estamos antentos a tu comunicación para poder implementar tus nuevas herramientas digitales.</p>
        <a href="#"><span></span>(+51)1.322.2789</a>
        <a href="#"><span></span>hola@kom.pe</a>
        <a href="#"><span></span>(+51)932.222.223</a>
        <a href="#"><span></span>(+51)932.222.223</a>
      </div>
    </div>
  </div>
</section>

<!-- .formgrid {  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    "formcontainer formcontainer formcontainer formcontainer"
    "formcontainer formcontainer formcontainer formcontainer"
    "formcontainer formcontainer formcontainer formcontainer"
    "formcontainer formcontainer formcontainer formcontainer"
    "ifdiv ifdiv ifdiv ifdiv"
    "ifdiv ifdiv ifdiv ifdiv"
    "ifdiv ifdiv ifdiv ifdiv"
    "ifdiv ifdiv ifdiv ifdiv";
}

.formcontainer { grid-area: formcontainer; }

.ifdiv { grid-area: ifdiv; }
 -->

<!-- conexion
<?php
// Configuración de la conexión con la base de datos
// $servername = "localhost";
// $username = "tu_usuario";
// $password = "tu_contraseña";
// $dbname = "tu_base_de_datos";
//
// // Conexión con la base de datos
// $conn = mysqli_connect($servername, $username, $password, $dbname);
//
// // Verifica si se pudo conectar con la base de datos
// if (!$conn) {
//   die("Conexión fallida: " . mysqli_connect_error());
// }
//
// // Recibe los datos del formulario
// $nombre = $_POST['nombre'];
// $apellido = $_POST['apellido'];
// $whatsapp = $_POST['whatsapp'];
// $correo = $_POST['correo'];
// $empresa = $_POST['empresa'];
//
// // Prepara y ejecuta la consulta SQL para insertar los datos en la base de datos
// $sql = "INSERT INTO datos_usuarios (nombre, apellido, whatsapp, correo, empresa)
//         VALUES ('$nombre', '$apellido', '$whatsapp', '$correo', '$empresa')";
//
// if (mysqli_query($conn, $sql)) {
//   echo "Datos guardados correctamente";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
//
// // Cierra la conexión con la base de datos
// mysqli_close($conn);
// ?> -->
