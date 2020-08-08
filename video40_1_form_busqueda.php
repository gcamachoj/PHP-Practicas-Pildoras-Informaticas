<!DOCTYPE html>
<html lang="en">
<head>

<style>
    table{

        width:80%;
        border:1px solid #ff0000;
        border-collapse:collapse;
    
    }

    .C1{
        min-width:40px;
     
        text-align:center;
        border: red 1px solid;
        text-align:right;
        padding:5px;
    }
    .C2{
        max-width:30px;
        min-width:60px;
        padding:5px;
        border: red 1px solid;
        padding:5px ;
        }
    
        .C4{
        max-width:60px;
        min-width:60px;
        padding:5px;
        border: red 1px solid;
        padding:5px ;
    
    
    .TH1{
        width:10%;
        text-align:center;
        border: red 1px solid;
        text-align:center;
    }
        
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require("video38_conexion.php");


header("Content-Type: text/html;charset=utf-8");

if(mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";
    exit();
}
 echo $conexion ? "<br>conexion exitosa<br>" : "<br>error durante la conexion<br>";

 mysqli_set_charset($conexion, "utf-8");
    
    echo "<table>";
    echo "<th class='C1'>ID</th>";
    echo "<th class='C2'>PLACA</th>";
    echo "<th class='C1'>Status Operativo</th>";
    echo "<th class='C1'>Fecha Fin</th>";
    echo "<th class='C1'>Total Servicios ($)</th>";
    echo "<th class='C1'>Total Repuestos ($)</th>";

$query = "select * from v_consolidadoos where Placa like '%e%'";
$resultados = mysqli_query($conexion, $query);
while($fila=mysqli_fetch_assoc($resultados))
{
    echo "<table><tr>";
    echo "<td class='C1'>".$fila["IdOservicio"]."</td>";
    echo "<td class='C2'>".$fila["Placa"]."</td>";
    echo "<td class='C1'>".$fila["IdStatusOperativo"] ."</td>";
    echo "<td class='C4'>".$fila["FechaHoraFin"]."</td>";
    echo "<td class='C1'>".$fila["VentaTotal_Servicios"] ."</td>";
    echo "<td class='C1'>".$fila["VentaTotal_Repuestos"] ."</td></tr></table>";
    
 
}
mysqli_close($conexion);
?>
</body>
</html>

