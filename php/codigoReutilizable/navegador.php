<?php
    
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor debes iniciar sesion");
                window.location="../index.html";
            </script>
        ';
        session_destroy();
        die(); 
    }   
?>


<link rel="stylesheet" type="text/css" href="../../css/codigoReutilizable/navegadorPHP.css" >
<!--  ENCABEZADO DE LA PAGINA -->
<nav id="navBarraMenu">
        
    <!--ICONO DE MENU HAMBURGUESA-->
    <input type="checkbox" id="check">
    <label for ="check" class="checkbtn"> 
        <i class="fas fa fa-bars"></i>
    </label>

    <!--LOGO-->
    <ul class="divisiones" id="divisionUno">
      <li class="subDivisiones"><a href="bienvenido.php"><img id="imgDivisionUno" class="imgBarraMenu" src="../img/LOGO-HORIZONTAL.png" alt=""></a></li>
    </ul> 

    <!--ELEMENTOS DEL MENU -->
    <ul class="divisiones" id="divisionDos">
        <li class="subDivisiones"><a class="redirecDivisionDos" href=""><img class="imgBarraMenu" id="imgDivisionDos" src="../gif/search.gif" alt="" ></a></li> <!--GIF DE LUPA-->
        <li class="subDivisiones"><a class="redirecDivisionDos" href="solicitarCita2.php">Solicitar cita</a></li> 
        <li class="subDivisiones"><a class="redirecDivisionDos" href="../../VideoConferencia.html">Urgencias</a></li>
        <li class="subDivisiones"><a class="redirecDivisionDos" href="#">servicios</a></li>
        <li class="subDivisiones"><a class="redirecDivisionDos" href="planes.php">Planes</a></li>
        <li class="subDivisiones"><a class="redirecDivisionDos" href="#">Donaciones</a></li> 
        <li class="subDivisiones"><a class="redirecDivisionDos" href="petshop.php">PetShop</a></li>
        <li class="subDivisiones"><a class="redirecDivisionDos" href="php/ReporteUsuarios.php">Reporte</a></li>
    </ul>
    <!--GIF DE CASA COMPRAS-->
    <ul class="divisiones" id="divisionCuatro">
        <li class="subDivisiones"><img class="imgBarraMenu" src="../../gif/pet-shop.gif" alt=""></li>
    </ul>
    <!--CERRAR SESION Y NOMBRE-->
    <ul class="subDivisiones" id="divisionUsuario">
        <li><img id="usuarioImg" src="../../img/usuarioperfil.png" ></li>
    </ul>
</nav>

<div id="contenedorUsuario">
  <article>
    <div>
        <ul id="desplegableUsuario">
            <li class="desplegableopciones"><a class="desplegableopciones2" href="#"><img src="../../img/configuraciones.png">CONFIGURACION</a></li>
            <li class="desplegableopciones"><a class="desplegableopciones2" href="#"><img src="../../img/correo.png"><?php echo strtoupper($_SESSION["usuario"]);?></a></li>
            <li class="desplegableopciones"><a class="desplegableopciones2" href="CerrarSesion.php"><img class="desplegablesImagenes" src="../img/sesion.png"> CERRAR SESION </a></li>
        </ul>   
    </div> 
  </article>
</div>

</nav>
<script src="../js/bienvenido.js"></script>
<!--TERMINA ENCABEZADO DE LA PAGINA -->