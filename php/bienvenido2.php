<?php
    
    session_start();

    if(!isset($_SESSION['rol'])){
        echo'
            <script>
                alert("Por favor debes iniciar sesion");
                window.location="login.php";
            </script>
            ';
    }else{
        if($_SESSION['rol'] != 1){
            echo'
            <script>
                alert("Acceso denegado");
                window.location="login.php";
            </script>
            ';
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenidooo</h1>
    <a href="CerrarSesion.php">Cerrar Sesion</a>
</body>
</html>