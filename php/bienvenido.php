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
    <link rel="stylesheet" type="text/css" href="../css/estilobienvenido.css" >
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
<!--TERMINA ENCABEZADO DE LA PAGINA -->>

<!--PROMOCION ENCIMA DE BANNER Y BANNER-->
<header id="hed1" > 
    <div  id="banner1">
        <img src="../img/LOGO-VERTICAL_AZUL.png" alt="">
        <h4>Alimentos y accesorios</h4>
        <h2>20% off</h2>
        <a id="botonb1" href="../PetShop.html">¡QUIERO MI DESCUENTO!</a>
    </div>
    <div><img class="headers" src="../img/Banner1.jpg" alt=""></div> 
    <div><img class="headers1" src="../img/Baner1.jpg" alt=""></div><!--IMAGEN DEL BANNER -->
</header>
<!----------------------------------------------------------------------------> 
<!--APARTADO DE SERVICIOS-->
      <section > 
          <article class="section" data-aos="fade-up">
              <h3>SERVICIOS</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum reiciendis tempora eveniet cumque quasi deleniti, quidem excepturi assumenda iste nemo ratione, <br> repellat minus cum ducimus vitae? Praesentium quos deleniti quam.</p>
          </article>
      </section>
<!----------------------------------------------------------------------------> 
<!--TODAS LAS CATEGORIAS -->
<!--CATEGORIA 1-->
    <section id="sec1" >
        <article class="section1" data-aos="fade-up">
            <div >
                <img src="../img/FOTO1.png" alt="">
                <h3>CATEGORIA 1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero. orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero.</p> 
            </div>
        </article>
<!--CATEGORIA 2-->
        <article class="section1" data-aos="fade-up">
            <div>
                <img src="../img/FOTO2.png" alt="">
                <h3>CATEGORIA 2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero. orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero.</p> 
            </div>
        </article>
<!--CATEGORIA 3-->
        <article class="section1"data-aos="fade-up">
            <div>
                <img src="../img/FOTO3.png" alt="">
                <h3>CATEGORIA 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero. orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero.</p> 
            </div>
        </article>
<!--CATEGORIA 4-->
        <article class="section1"data-aos="fade-up">
            <div>
                <img src="../img/FOTO4.png" alt="">
                <h3>CATEGORIA 4</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero. orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero.</p> 
            </div>
        </article>
<!--CATEGORIA 5-->
        <article class="section1"data-aos="fade-up">
            <div>
                <img src="../img/FOTO5.png" alt="">
                <h3>CATEGORIA 5</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero. orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero.</p> 
            </div>   
        </article>
<!--CATEGORIA 6-->
        <article class="section1"data-aos="fade-up">
            <div>
                <img src="../img/FOTO6.png" alt="">
                <h3>CATEGORIA 6</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero. orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero.</p> 
            </div>
        </article>
<!--CATEGORIA 7-->
        <article class="section1"data-aos="fade-up">
            <div>
                <img src="../img/FOTO7.png" alt="">
                <h3>CATEGORIA 7</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero. orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero.</p> 
            </div>
        </article>
<!--CATEGORIA 8-->
        <article class="section1"data-aos="fade-up">
            <div>
                <img src="../img/FOTO8.png" alt="">
                <h3>CATEGORIA 8</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero. orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at vero.</p> 
            </div>
        </article>
    </section>
 

    <!---------------------SLIDER--------------------->

    <section id="secslider">
        <article class="sectionslider">
            <div class="slider">

                <ul>
                    <li>
                        <article class="sectionsli">
                            <div>
                                <img src="../img/FOTO8.png" alt="">
                                <h3>CATEGORIA 8</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                    orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                </p>
                            </div>
                        </article>
                    <li>
                        <article class="sectionsli">
                            <div>
                                <img src="../img/FOTO8.png" alt="">
                                <h3>CATEGORIA 8</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                    orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                </p>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="sectionsli">
                            <div>
                                <img src="../img/FOTO8.png" alt="">
                                <h3>CATEGORIA 8</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                    orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                </p>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="sectionsli">
                            <div>
                                <img src="../img/FOTO8.png" alt="">
                                <h3>CATEGORIA 8</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                    orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                </p>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="sectionsli">
                            <div>
                                <img src="../img/FOTO8.png" alt="">
                                <h3>CATEGORIA 8</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                    orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                </p>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="sectionsli">
                            <div>
                                <img src="../img/FOTO8.png" alt="">
                                <h3>CATEGORIA 8</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                    orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                </p>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="sectionsli">
                            <div>
                                <img src="../img/FOTO8.png" alt="">
                                <h3>CATEGORIA 8</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                    orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                </p>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="sectionsli">
                            <div>
                                <img src="../img/FOTO8.png" alt="">
                                <h3>CATEGORIA 8</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                    orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                </p>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="sectionsli">
                            <div>
                                <img src="../img/FOTO8.png" alt="">
                                <h3>CATEGORIA 8</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                    orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                </p>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="sectionsli">
                            <div>
                                <img src="../img/FOTO8.png" alt="">
                                <h3>CATEGORIA 8</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                    orem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ex placeat at
                                    vero.
                                </p>
                            </div>
                        </article>
                    </li>
            </div>
        </article>
    </section>


<!---------------------------------------------------------------------------->    

<!--INICIO DE SESION  ENCIMA DE BANNER 2 Y BANNER 2-->

            <section data-aos="fade-up">
                <header>
                    <div id="heder2">
                        <img class="headers" src="../img/Banner2.jpg" alt="">
                    </div>

                    <div>
                        <img class="headers2" src="../img/Baner2.jpg" alt="">
                    </div>
<!---------------------------------------------------------------------------->  
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

<!--JAVASCRIPT NECESARIO PARA EL SCROLL-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="../js/AnimacionScroll.js"></script>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<!----------------------------------------------------------------------------> 
</body>
</html>