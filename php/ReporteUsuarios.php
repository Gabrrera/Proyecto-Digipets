<?php
include_once("conexion.php");
$conectar=conn();
$query=mysqli_query($conectar,"SELECT * FROM usuarios ");
$docu="report.xls";
header ('content-type:application/vnd.ms-excel');
header('content-disposition:attachment:filename='.$docu);
header ('pragma:no-cache');
header('expires: 0');

echo '<table border=1>';
echo '<tr>';
echo '<th colspan=3>reporte usuarios </th> ';
echo '</tr>';
echo '<tr><th>nombre</th> <TH>correo</TH> <TH>contrasena</TH> </tr>';

while ($row=mysqli_fetch_array($query)){
    echo '<tr>';
    echo '<td>'.$row['nombre'].'</td>';
    echo '<td>'.$row['correo'].'</td>';
    echo '<td>'.$row['contraseña'].'</td>';
    echo '</tr>';
}

echo '</table>';