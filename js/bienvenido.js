const despliegueUsuario = document.getElementById("prueba")
const ocultar=document.getElementById("contenedorUsuario")

document.addEventListener('DOMContentLoaded', function() {
    ocultar.style.display='none';
});


despliegueUsuario.addEventListener("click",function(){

    if (ocultar.style.display==='block') {
        ocultar.style.display='none';
        console.log("block")
} else  {
        ocultar.style.display='block';
         console.log("none")
}})



