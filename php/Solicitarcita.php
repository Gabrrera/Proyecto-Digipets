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

<!DOCTYPE html>
<html lang="es">
<head>
    <title>DIGIPETS</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="responsive, Veterinaria, virtual, pets, telemedicina, animales,consultas">
    <meta name="description" content="Sitio web">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NATALIA ACOSTA, JAIDER MORALES, GABRIEL BARRERA, JULIAN GRANADOS, LUIS VARRON">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://localhost/Digipets/code/css/estilobienvenido.css" >
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!--LINK PARA LIBRERIA DE ICONOS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;900&display=swap" rel="stylesheet">
    
</head>
<body>
<!--  ENCABEZADO DE LA PAGINA -->
<nav >
      
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
        <li><a  href="/Solicitarcita.php">Solicitar cita</a></li> 
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

</nav>

<div id="contenedorcompras" class="cerrado">
  <article>
    <div>

   
    <ul class="lista8" id="">
<li> <a href=""><img class="icono" src="../img/configuraciones.png">CONFIGURACION</a></li>
<li><a href="#"><img class="icono" src="../img/correo.png"><?php echo strtoupper($_SESSION["usuario"]);?></li>
<li><a href="CerrarSesion.php"><img class="icono" src="../img/sesion.png"> CERRAR SESION </a></li>
</ul>



    
  </article>
</div>



  </article>
  <div><a id="" href=""></a></div>
</div>
 

</nav>
<!--TERMINA ENCABEZADO DE LA PAGINA -->>
