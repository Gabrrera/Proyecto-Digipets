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
    <link rel="stylesheet" type="text/css" href="../css/estilopetshop.css" >
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
        <li><a  href="Solicitarcita.php">Solicitar cita</a></li> 
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
<!--TERMINA ENCABEZADO DE LA PAGINA -->


<div id="div2">
  <img id="baner3" src="../img/PETSHOP/perro-comiendo.png" alt="">

  <p>PETSHOP <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique enim eveniet nesciunt quas voluptatum cumque, veritatis nemo nulla saepe minus! Unde reiciendis omnis obcaecati quae. </p>
</div>

<nav id="productos">
  <div id="list-producto">
    <section id="listap1">

      <ul>
        <li class="boxlp" id="categoria">CATEGORIAS</li>
      </ul>
      <ul class="box-ul" >
        <a href="" class="box-img"><img  src="../img/PETSHOP/comida.png" alt=""></a>
        <li class="boxlp"><a href=""></a>Comida</li>
      </ul>
      <ul class="box-ul">
        <a href="" class="box-img"><img  src="../img/PETSHOP/cuidado e higiene.png" alt=""></a>
        <li class="boxlp">Cuidado e Higiene </li>
      </ul>
      <ul class="box-ul">
        <a href="" class="box-img"><img  src="../img/PETSHOP/limpieza y orina.png" alt=""></a>
        <li class="boxlp">Limpieza y Orina</li>
      </ul>
      <ul class="box-ul">
        <a href="" class="box-img"><img  src="../img/PETSHOP/salud.png" alt=""></a>
        <li class="boxlp">Salud</li>
      </ul class="box-ul"> 
      <ul class="box-ul">
        <a href="" class="box-img"><img  src="img/PETSHOP/hogar mascotas.png" alt=""></a>
        <li class="boxlp">Hogar Animales</li>
      </ul>
      <ul class="box-ul">
        <a href="" class="box-img"><img  src="../img/PETSHOP/pasear.png" alt=""></a>
        <li class="boxlp">Pasear</li>
      </ul>
      <ul class="box-ul">
        <a href="" class="box-img"><img  src="../img/PETSHOP/comedores y bebederos.png" alt=""></a>
        <li class="boxlp">Comedor y Bebedero</li>
      </ul>
      <ul class="box-ul">
        <a href="" class="box-img"><img  src="../img/PETSHOP/jugetes.png" alt=""></a>
        <li class="boxlp">Jugetes</li>
      </ul>
      <ul class="box-ul">
        <a href="" class="box-img"><img  src="../img/PETSHOP/ropa y accesorios.png" alt=""></a>
        <li class="boxlp">Ropa y Accesorios</li>
      </ul>
      <ul class="box-ul">
        <a href="" class="box-img"><img  src="../img/PETSHOP/viajes.png" alt=""></a>
        <li class="boxlp">Viajes</li>
      </ul>
      
      
    </section>
    
  </div>

  <div id="img-producto">

  <ul id="listaimgp">
    <li class="boxip">
      <img src="../img/PETSHOP/pedigre.png" alt="">
      <h2>Lorem ipsum dolor sit amet.</h2>
      <p class="descripcion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, quia.</p>
      <p class="precio">90.000</p>
      <button class="botonc"  >AGREGAR AL CARRITO</button>
    </li>
    <li class="boxip">
      <img src="../img/PETSHOP/Nutre-Can.png" alt="">
      <h2>Lorem ipsum dolor sit amet.</h2>
      <p class="descripcion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, quia.</p>
      <p class="precio">90.000</p>
      <button class="botonc"  >AGREGAR AL CARRITO</button>
    </li>
    <li class="boxip">
      <img src="../img/PETSHOP/dog-chow.png" alt="">
      <h2>Lorem ipsum dolor sit amet.</h2>
      <p class="descripcion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, quia.</p>
      <p class="precio">90.000</p>
      <button class="botonc"  >AGREGAR AL CARRITO</button>
    </li>
    <li class="boxip">
      <img src="../img/PETSHOP/ringo.png" alt="">
      <h2>Lorem ipsum dolor sit amet.</h2>
      <p class="descripcion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, quia.</p>
      <p class="precio">90.000</p>
      <button class="botonc"  >AGREGAR AL CARRITO</button>
    </li>
    <li class="boxip">
      <img src="../img/PETSHOP/Chunky.png" alt="">
      <h2>Lorem ipsum dolor sit amet.</h2>
      <p class="descripcion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, quia.</p>
      <p class="precio">90.000</p>
      <button class="botonc"  >AGREGAR AL CARRITO</button>
    </li>
    <li class="boxip">
      <img src="../img/PETSHOP/excellent.png" alt="">
      <h2>Lorem ipsum dolor sit amet.</h2>
      <p class="descripcion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, quia.</p>
      <p class="precio">90.000</p>
      <button class="botonc"  >AGREGAR AL CARRITO</button>
    </li>
    <li class="boxip">
      <img src="../img/PETSHOP/monello.png" alt="">
      <h2>Lorem ipsum dolor sit amet.</h2>
      <p class="descripcion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, quia.</p>
      <p class="precio">90.000</p>
      <button class="botonc"  >AGREGAR AL CARRITO</button>
    </li>
    <li class="boxip">
      <img src="../img/PETSHOP/nutra.png" alt="">
      <h2>Lorem ipsum dolor sit amet.</h2>
      <p class="descripcion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, quia.</p>
      <p class="precio">90.000</p>
      <button class="botonc"  >AGREGAR AL CARRITO</button>
    </li>
    <li class="boxip">
      <img src="../img/PETSHOP/max.png" alt="">
      <h2>Lorem ipsum dolor sit amet.</h2>
      <p class="descripcion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, quia.</p>
      <p class="precio">90.000</p>
      <button class="botonc"  >AGREGAR AL CARRITO</button>
    </li>

  </ul>
  
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