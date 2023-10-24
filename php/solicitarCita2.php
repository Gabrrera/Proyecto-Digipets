<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agendar Cita Veterinaria</title>
        <link rel="stylesheet" type="text/css" href="../css/estilosolicitarCita.css">
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="../js/ScrollProcesarCita.js"></script>
    </head>
<body>

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

</body>
</html>
