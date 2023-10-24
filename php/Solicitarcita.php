<?php


// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// // Inicia la sesión
// session_start();
// $_SESSION["usuario"] = "usuario"; 

// if (isset($_SESSION["usuario"])) {
//     strtoupper($_SESSION["usuario"]);
// } else {
//     echo "Usuario no definido"; 
// }


// // Conexión a base de datos
//     include 'conexion.php';

//     if ($_SERVER["REQUEST_METHOD"] === "POST") {

//         $idTipoConsulta = $_POST["IdTipoConsulta"];
//             echo ($idTipoConsulta); 
            
//         if (empty($nombreCliente) || empty($email) || empty($fechaConsulta) || empty($idTipoConsulta)) {
//             echo "Por favor, complete todos los campos.";
//         } else {
//             $sqlRandomEspecialista = "SELECT idEspecialista FROM Especialistas ORDER BY RAND() LIMIT 1";
//             $result = $conexion->query($sqlRandomEspecialista);
//             if ($result) {
//                 $row = $result->fetch_assoc();
//                 $idEspecialista = $row['idEspecialista'];
//         }
//     }


// // Conecta a la base de datos
// $conexion = conn();

//     // Verifica la conexión
//     if (!$conexion) {
//         die("Error en la conexión a la base de datos: " . mysqli_connect_error());
//     }


//     if ($email == TRUE)
//     {
//         $sql = "SELECT Clientes.IdCliente, Consultas.IdCliente
//         FROM Clientes
//         INNER JOIN Consultas ON Consultas.IdCliente = Clientes.IdCliente"
//     }

//     else {
//         echo "Correo invalido por favor verificar"
//     }
    

//     //Query validacion email y me traiga ID 
//     $sql
//     //Query SQL para traer los datos del IdTipoConsulta
//     $sql = "SELECT TipoConsultas.idTipoConsulta, Consultas.idTipoConsulta
//     FROM TipoConsultas
//     INNER JOIN Consultas ON Consultas.idTipoConsulta = TipoConsultas.idTipoConsulta" 


//     //Query SQL para traer los datos del IdMascota
//     $sql = "SELECT Mascotas.IdMascota, Consultas.IdMascota
//     FROM Mascotas
//     INNER JOIN Consultas ON Consultas.IdMascota = Mascotas.IdMascota"

//     // Query SQL para insertar la cita
//     $sql = "INSERT INTO Consultas (IdConsulta, IdTipoConsulta, IdEspecialista, IdCliente, IdMascota, FechaConsulta, CostoConsulta) VALUES (?, ?, ?, ?, ?, ?, ?)";

//     // Prepara la consulta
//     $stmt = $conexion->prepare($sql);
//     $stmt->bind_param("sssi", $nombreCliente, $email, $fechaConsulta, $idEspecialista);

//     // Ejecuta la consulta
//     if ($stmt->execute()) {
//         echo "Cita agendada con éxito. ¡Gracias!";
//     } else {
//         echo "Error al agendar la cita: " . $conexion->error;
//     }

//     // Cierra la conexión a la base de datos
//     $conexion->close();
// }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita Veterinaria</title>
    <link rel="stylesheet" type="text/css" href="../css/estilosolicitarCita.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>

<?php include 'codigoReutilizable/navegador.php'; ?>

    <!--SECCION PARA AGENDAR CITA -->
    <nav id="navProgramarCita">
        <div id="popUpProgramarCita" class="container">
            <h1>Agendar Cita Veterinaria</h1>
            <form action="" method="post">

                <label class="titulos">Correo electrónico:</label>
                <input type="email" class="campoFormularioProgramarCita" name="Email" required>

                <label  class="titulos">Tipo de consulta:</label>
                <select name="FechaConsulta" id="campoConsultaFormProgramarCita" required>
                <option value="IdTipoConsulta">Consulta General</option>
                <option value="IdTipoConsulta">Peluqueria</option>
                <option value="IdTipoConsulta">Perdida de peso</option>
                <option value="IdTipoConsulta">Caída de pelo</option>
                <option value="IdTipoConsulta">Habitos no comunes</option>
                <option value="IdTipoConsulta">Consulta General</option>
                <option value="IdTipoConsulta">Infeccion de herida</option>
                <option value="IdTipoConsulta">Medicina Preventiva</option>
                <option value="IdTipoConsulta">Urgencia</option>
                <option value="IdTipoConsulta">Ortopedia</option>                                
                </select>

                <label  class="titulos">Fecha de cita:</label>
                <input type="date" id="campoFechaFormProgramarCita" name="FechaConsulta" required>
                </select>

                <button id="botonEnviar" type="submit">Agendar Cita</button>
            </form>
        </div> 
        <div id="mensajeExito" class="mensaje-exito" style="display: none;">Cita agendada con éxito. ¡Gracias!</div>
    </nav>
              
<?php include 'codigoReutilizable/footer.php'; ?>
   
  <script src="../js/ScrollProcesarCita.js"></script>
</body>
</html>
