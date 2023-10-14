<?php
    include 'conexion.php';
    session_start();

    $conectar=conn();
    $correo = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $contraseñaincriptada = hash('sha512',$contraseña);

    $validar_login = mysqli_query($conectar, "SELECT * FROM usuarios WHERE correo='$correo' and contraseña='$contraseñaincriptada'");

    $row = mysqli_fetch_assoc($validar_login);

    if(isset($_SESSION['rol'])){
      switch($_SESSION['rol']){
        case 1:
          header("location:bienvenido.php");
          break;

        case 2:
          header("location:administrador.php");
          break;
          
        default:
      } 
    }

    if(mysqli_num_rows($validar_login)>0){
      $rol = $row["RolId"];
      $_SESSION['rol']=$rol;
      $_SESSION['usuario']=$correo;
      switch($_SESSION['rol']){
        case 1:
          header("location:bienvenido.php");
          break;

        case 2:
          header("location:administrador.php");
          break;

        default:
      }
    }else{
      echo '
          <script>
              alert("Usuario no existe, por favor verifique los datos introducidos");
              window.location="../index.html"
          </script>
      ';
      exit;
    }
?>
