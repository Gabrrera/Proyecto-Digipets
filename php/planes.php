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
        <link rel="stylesheet" type="text/css" href="../css/estiloplanes.css">
        <script src="../js/carrito.js" async></script>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
<body>
<?php include 'codigoReutilizable/navegador.php'; ?>

        <section class="contenedor">
          <!-- Contenedor de elementos -->
          <div class="contenedor-items">
              <div class="item">
                  <span class="titulo-item">Categoria 1</span>
                  <img src="../img/imagenes-planes/boxengasse.png" alt="" class="img-item">
                  <span class="precio-item">$15.000</span>
                  <button class="boton-item">Agregar al Carrito</button>
              </div>
              <div class="item">
                  <span class="titulo-item">Categoria 2</span>
                  <img src="../img/imagenes-planes/englishrose.png" alt="" class="img-item">
                  <span class="precio-item">$25.000</span>
                  <button class="boton-item">Agregar al Carrito</button>
              </div>
              <div class="item">
                  <span class="titulo-item">Categoria 3</span>
                  <img src="../img/imagenes-planes/knocknap.png" alt="" class="img-item">
                  <span class="precio-item">$35.000</span>
                  <button class="boton-item">Agregar al Carrito</button>
              </div>
              <div class="item">
                <span class="titulo-item">Categoria 4</span>
                <img src="../img/imagenes-planes/lanight.png" alt="" class="img-item">
                <span class="precio-item">$18.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Categoria 5</span>
                <img src="../img/imagenes-planes/silverall.png" alt="" class="img-item">
                <span class="precio-item">$32.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Categoria 6</span>
                <img src="../img/imagenes-planes/skinglam.png" alt="" class="img-item">
                <span class="precio-item">$18.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Categoria 7</span>
                <img src="../img/imagenes-planes/midimix.png" alt="" class="img-item">
                <span class="precio-item">$54.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
              <span class="titulo-item">Categoria 8</span>
              <img src="../img/imagenes-planes/sirblue.png" alt="" class="img-item">
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
<?php include 'codigoReutilizable/footer.php'; ?>
</body>
</html>