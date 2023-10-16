const despliegueUsuario = document.getElementById("usuarioImg")
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

// ----------------------

const efectohover=document.querySelector('.desplegableopciones')
const efectohover2=document.querySelector('.desplegableopciones2')

efectohover.addEventListener('mouseover', function() {
    this.style.backgroundColor = 'white';
    efectohover2.style.color= 'black';
});

efectohover.addEventListener('mouseout', function() {
    this.style.backgroundColor = '';
    efectohover2.style.color= '';
    
});

