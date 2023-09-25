<?php
// Conexión a base de datos
    include 'conexion.php';
    $conectar=conn();

// Verifica la conexión
if ($conectar->connect_error) {
    die("Error en la conexión a la base de datos: " . $conectar->connect_error);
}

// Recibe los datos del formulario
$nombreCliente = $_POST["NombreCliente"];
$email = $_POST["Email"];
$fechaConsulta = $_POST["FechaConsulta"];
$idEspecialista = $_POST["IdEspecialista"];

// Lista de especialistas disponibles.
$especialistas = array("Veterinario 1", "Veterinario 2", "Veterinario 3");

// Selección de un especialista al azar
$idEspecialista = $especialistas[array_rand($especialistas)];

// Prepara la consulta SQL para insertar la cita en la base de datos
$sql = "INSERT INTO citas (NombreCliente, Email, FechaConsulta, idEspecialista)
        VALUES ('$nombreCliente', '$email', '$fechaConsulta', '$idEspecialista')";

if ($conectar->query($sql) === TRUE) {
    $mensaje = "Cita agendada correctamente";
    $esExito = true;
} else {
    $mensaje = "Error al agendar la cita: " . $conectar->error;
    $esExito = false;
}

function obtenerClaseConfirmacion($exito) {
    if ($exito) {
        return 'confirmacion-cita';
    } else {
        return 'error-cita';
    }
}
$claseConfirmacion = obtenerClaseConfirmacion($esExito);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita Veterinaria</title>
    <link rel="stylesheet" type="text/css" href="../css/estiloProcesarCita.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>

    <nav id="nav1">
        
        <!--ICONO DE MENU HAMBURGUESA-->
        <input type="checkbox" id="check">
        <label for ="check" class="checkbtn"> 
            <i class="fas fa fa-bars"></i>
        </label>
        <!--LOGO-->
        <ul class="lista" id="l1">
          <li ><a href="bienvenido.php"><img src="../img/LOGO-HORIZONTAL.png" alt=""></a></li>
        </ul> 
        <!--ELEMENTOS DEL MENU -->
        <ul class="lista" id="l2">
            <li ><a href=""><img src="../gif/search.gif" class="lupa"  alt="" ></a></li> <!--GIF DE LUPA-->
            <!-- <li><a  href="Solicitarcita.php">Solicitar cita</a></li> -->
            <li ><a href="../servicios.html">servicios</a></li>
            <li ><a href="../Planes.html">Planes</a></li>
            <li><a  href="../Donaciones.html">Donaciones</a></li> 
            <li ><a href="../PetShop.html">PetShop</a></li>
            <li><a href="ReporteUsuarios.php" class="btn-small blue z-depth-2">Reporte</a></li>
        </ul>
        <!--GIF DE CASA COMPRAS-->
        <ul class="lista" id="l4">
                <li><a id="boton1" href=""><img src="../gif/pet-shop.gif" alt=""></a></li>
        </ul>
        <!--CERRAR SESION Y NOMBRE-->
    
    
       <ul class="lista" id="usuario">
        <li><img src="../img/usuario.png" onclick="despliegue('contenedorcompras')"></li>
    

    <div id="contenedorcompras" class="cerrado">
      <article>
        <div>
    
    
        <ul class="lista8" id="">
    <li> <a href=""><img class="icono" src="../img/configuraciones.png">CONFIGURACION</a></li>
    <li><a href=""><img class="icono" src="../img/correo.png"><?php echo strtoupper($_SESSION["usuario"]);?></li>
    <li><a href="CerrarSesion.php"><img class="icono" src="../img/sesion.png"> CERRAR SESION </a></li>
    </ul> 
      </article>
    </div> 

      </article>
      <div><a id="" href=""></a></div>
    </div>
    </nav>


    <!--SECCION PARA AGENDAR CITA -->
    <nav id="navProgramarCita">
        <div id="popUpProgramarCita" class="container">
            <h1>Agendar Cita Veterinaria</h1>
            <form action="" method="post">
                <label class="titulos">Nombre completo:</label>
                <input type="text" class="campoFormularioProgramarCita" name="NombreCliente" required>

                <label class="titulos">Correo electrónico:</label>
                <input type="email" class="campoFormularioProgramarCita" name="Email" required>

                <label  class="titulos">Fecha de cita:</label>
                <input type="date" id="campoFechaFormProgramarCita" name="FechaConsulta" required>

                </select>

                <button type="submit">Agendar Cita</button>
            </form>
        </div> 
    </nav>
              
    
    <!--SECCION DE LA PARTE FINAL -->
<section>
    <article>
        <footer id="foopets">
              <div class=""><img  id="fooimg" src="../img/LOGO-HORIZONTAL.png" alt=""></div>
              <div class="fp1"><h3>Horario de atención</h3><a href=""><img src="../gif/pet-shop.gif"></a><p>Lunes a Domingo<br>9:00 am a 21:00pm </p></div>
              <div class="fp1"><h3>Correo</h3><a href=""><img src="../gif/pet-shop.gif"></a><p>DIGIPETS@gmail.com <br>VETEDIGITEPS@gmail.com<br></p></div>
               <div class="fp1"><h3>Teléfono</h3><a href=""><img src="../gif/pet-shop.gif"></a><p>Telefonos de contacto<br> 7832257 - 311 2583291</p></div>
        </footer>
    </article>
  </section>
  <script src="../js/ScrollProcesarCita.js"></script>
</body>
</html>