
// var NombreParaCita = document.getElementsByClassName("EmailInicioSesion")[0].innerText;
// console.log(NombreParaCita);
// alert(NombreParaCita);


function FuncionAjax(NombreParaCita){
    var UrlMeet = CrearMeet();
    console.log("el valor de urlmeet es " + UrlMeet);
    $.ajax({
        url:'../php/EnvioCorreoUrlMeet.php',
        data: {miData: 'Enviar', 
            Url: UrlMeet, 
            Nombre: NombreParaCita},
        //processData: false,
        type: 'POST',
        success: function(miData){
            console.log(miData);
            $(".resultadoContenido").html(miData);
        },
        error: function(error){
            console.log(error);
        }
    })
}

