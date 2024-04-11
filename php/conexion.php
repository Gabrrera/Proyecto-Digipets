<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
//Configuracion necesaria para acceder a la base de datos

function conn(){
   $hostname = "localhost";
   $usuariodb = "edigipee8_Admin";
   $passworddb = "euxdalyjze25691";
   $dbname = "edigipee8_Digipets"; 

   // Generardo la conexion con el servidor
   $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
   return $conectar;
}
?>