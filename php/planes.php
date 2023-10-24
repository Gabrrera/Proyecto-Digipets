<?php 
    include 'codigoReutilizable/navegador.php'; 
    include 'codigoReutilizable/footer.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DIGIPETS</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="responsive, Veterinaria, virtual, pets, telemedicina, animales,consultas">
        <meta name="description" content="Sitio web">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="NATALIA ACOSTA, JAIDER MORALES, GABRIEL BARRERA, JULIAN CORREDOR, LUIS VARRON">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="http://localhost/Digipets/code/assets/css/estiloplanes.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/Digipets/code/assets/css/estilonavegador.css">
        <script src="js/carrito.js" async></script>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
<body>

    <nav id="">
        <div>
    
            <ul class="lista" id="l1">
              <li><a href="index.html"><img src="img/LOGO-HORIZONTAL.png" alt=""></a></li>
            </ul> 
            <ul class="lista" id="l2">
              <li><a href=""><img src="gif/search.gif" alt="" ></a></li>
              <li><a  href="Solicitarcita.html">Solicitar cita</a></li> 
              <li ><a href="servicios.html">servicios</a></li>
              <li ><a href="Planes.html">Planes</a></li>
              <li><a  href="Donaciones.html">Donaciones</a></li> 
              <li ><a href="PetShop.html">PetShop</a></li>
            </ul>
            <ul class="lista" id="l3">
              <li><div><a id="boton" href="#inisiarsesion">Iniciar sesión</a></div></li>
            </ul>  
            <ul class="lista" id="l4">
              <li><a id="boton1" href=""><img src="gif/pet-shop.gif" alt=""></a></li>
            </ul>
            </div>
        </nav>

        <section class="contenedor">
          <!-- Contenedor de elementos -->
          <div class="contenedor-items">
              <div class="item">
                  <span class="titulo-item">Categoria 1</span>
                  <img src="img/imagenes-planes/boxengasse.png" alt="" class="img-item">
                  <span class="precio-item">$15.000</span>
                  <button class="boton-item">Agregar al Carrito</button>
              </div>
              <div class="item">
                  <span class="titulo-item">Categoria 2</span>
                  <img src="img/imagenes-planes/englishrose.png" alt="" class="img-item">
                  <span class="precio-item">$25.000</span>
                  <button class="boton-item">Agregar al Carrito</button>
              </div>
              <div class="item">
                  <span class="titulo-item">Categoria 3</span>
                  <img src="img/imagenes-planes/knocknap.png" alt="" class="img-item">
                  <span class="precio-item">$35.000</span>
                  <button class="boton-item">Agregar al Carrito</button>
              </div>
              <div class="item">
                <span class="titulo-item">Categoria 4</span>
                <img src="img/imagenes-planes/lanight.png" alt="" class="img-item">
                <span class="precio-item">$18.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Categoria 5</span>
                <img src="img/imagenes-planes/silverall.png" alt="" class="img-item">
                <span class="precio-item">$32.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Categoria 6</span>
                <img src="img/imagenes-planes/skinglam.png" alt="" class="img-item">
                <span class="precio-item">$18.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Categoria 7</span>
                <img src="img/imagenes-planes/midimix.png" alt="" class="img-item">
                <span class="precio-item">$54.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
              <span class="titulo-item">Categoria 8</span>
              <img src="img/imagenes-planes/sirblue.png" alt="" class="img-item">
              <span class="precio-item">$32.000</span>
              <button class="boton-item">Agregar al Carrito</button>
          </div>
            </div>
          </div>
          <!-- Carrito de Compras -->
          <div class="carrito" id="carrito">
              <div class="header-carrito">
                  <h2>Tu Carrito</h2>
              </div>
              <div class="carrito-items">

           
            </div>
              <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
        </section> 
</body>
</html>