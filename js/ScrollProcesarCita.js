// Espera a que cargue el contenido de la página
document.addEventListener("DOMContentLoaded", function () {
    //Instancia de ScrollReveal
    const sr = ScrollReveal();

    // Configuraciones de animación
    sr.reveal('.campoFormularioProgramarCita', {
        origin: 'top',   // Desde la parte inferior
        distance: '20px',   // Distancia de desplazamiento
        duration: 1000,     // Duración en milisegundos
        delay: 400,         // Retraso en milisegundos
        easing: 'ease-in-out', // Tipo de animación
        reset: true         // Reiniciar la animación en cada desplazamiento
    });

    sr.reveal('#campoEspecialistaFormProgramarCita', {
        origin: 'top',
        distance: '20px',
        duration: 1000,
        delay: 400, 
        easing: 'ease-in-out',
        reset: true
    });

    sr.reveal('#campoConsultaFormProgramarCita', {
        origin: 'top',
        distance: '20px',
        duration: 1000,
        delay: 500, 
        easing: 'ease-in-out',
        reset: true
    });

    sr.reveal('#campoFechaFormProgramarCita', {
        origin: 'top',
        distance: '20px',
        duration: 1000,
        delay: 400,
        easing: 'ease-in-out',
        reset: true
    });

    sr.reveal('button', {
        origin: 'top',
        distance: '20px',
        duration: 1000,
        delay: 400,
        easing: 'ease-in-out',
        reset: true
    });

    sr.reveal('h1', {
        origin: 'top',
        distance: '20px',
        duration: 1000,
        delay: 400,
        easing: 'ease-in-out',
        reset: true
    });

    sr.reveal('#popUpProgramarCita', {
        origin: 'top',
        distance: '20px',
        duration: 1000,
        delay: 400,
        easing: 'ease-in-out',
        reset: true
    });

    // Ocultar el mensaje de éxito al principio
    var mensajeExito = document.getElementById("mensajeExito");
    mensajeExito.style.display = "none";

    function mostrarMensajeExito() {
        mensajeExito.style.display = "block";
    }

    function ocultarMensajeExito() {
        mensajeExito.style.display = "none";
    }    

    var form = document.querySelector('form');
    form.addEventListener('submit', function (e) {
        e.preventDefault(); 

    var exito = true;

     if (exito) {
            mostrarMensajeExito();}
            setTimeout(ocultarMensajeExito, 5000);
    });
<<<<<<< HEAD
});
=======
});


>>>>>>> Jaider
