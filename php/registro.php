<?php
include_once("conexion.php");
$conectar=conn(); 
// Almacena todos los datos del formulario
$Nombre=$_POST["name"];
$CorreoElectronico=$_POST["email"];
$Contraseña=$_POST["contraseña"];
$ConfirmarContraseña=$_POST["confcontraseña"];
$ContraseñaIncriptada=hash('sha512',$Contraseña); 
$verificarRegistro = mysqli_query($conectar, "SELECT * FROM usuarios WHERE correo='$CorreoElectronico'");

if(mysqli_num_rows($verificarRegistro)>0){
    echo'
    <script>
        alert("El correo ingresado ya se encuentra registrado, intente nuevamente");
        window.location="../index.html";
    </script>
    ';
    exit;
  }else{
    $sql="INSERT INTO usuarios (nombre, correo, contraseña, confcontraseña)
    VALUES ('$Nombre','$CorreoElectronico','$ContraseñaIncriptada','$ConfirmarContraseña')";
    $resul = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL - Error: ".mysql_error($conectar), E_USER_ERROR);

    echo'
    <script>
        alert("Usuario registrado correctamente, por favor inicie sesion");
        window.location="../index.html";
    </script>
    ';
    exit;
  }
?>