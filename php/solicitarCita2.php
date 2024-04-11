<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agendar Cita Veterinaria</title>
        <link rel="stylesheet" type="text/css" href="../css/estilosolicitarCita2.css">
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="../js/ScrollProcesarCita.js"></script>
        <script src="../js/CreacionDeMeet.js"></script>
        <script src="../js/EnvioDeCorreo.js"></script>
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

                <button onclick="capturarDatosCita()" id="botonEnviar" type="submit">Agendar Cita</button>
            </form>
        </div> 
        <div id="mensajeExito" class="mensaje-exito" style="display: none;">Cita agendada con éxito. ¡Gracias!</div>
    </nav>  
<?php include 'codigoReutilizable/footer.php'; ?>
</body>
</html>

<script>
    function capturarDatosCita(){
        var NombreParaCita = document.getElementsByClassName("campoFormularioProgramarCita")[0].innerText;
        FuncionAjax(NombreParaCita);
    }
</script>
