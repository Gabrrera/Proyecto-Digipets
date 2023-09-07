<?php
//Configuracion necesaria para acceder a la base de datos

function conn(){
   $hostname = "Localhost";
   $usuariodb = "root";
   $passworddb = "";
   $dbname = "digipets"; 

   // Generardo la conexion con el servidor
   $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
   return $conectar;
}
?>