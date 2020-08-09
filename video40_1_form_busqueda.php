<!DOCTYPE html>
<html lang="en">
<head>

<style>
    table{
        width:80%;
        border:1px solid #ff0000;
        border-collapse:collapse;
        }

    .id{
        width:10%;
        text-align:center;
        border: red 1px solid;
        text-align:right;
        }

    .placa{
        width:20%;
        border: red 1px solid;
        }
    


    .status{
            width:5%;
            border: red 1px solid;
           }
    
    .fechafin{
        width:25%;
        text-align:center;
        border: red 1px solid;
        text-align:center;
         }
        
    
         .servicios{
        width:20%;
  
        border: red 1px solid;
        }

        .repuestos{

        width:20%;
        border: red 1px solid;
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
    echo "<th class='id'>ID</th>";
    echo "<th class='placa'>PLACA</th>";
    echo "<th class='status'>S.O.</th>";
    echo "<th class='fechafin'>Fecha Fin</th>";
    echo "<th class='servicios'>Total Servicios ($)</th>";
    echo "<th class='repuestos'>Total Repuestos ($)</th>";


$placa=$_POST['buscar'];
echo $placa;
$query = "select * from V_ConsolidadoOS where Placa like '$placa'";

$resultados = mysqli_query($conexion, $query);
while($fila=mysqli_fetch_assoc($resultados))
{
    echo "<table><tr>";
    echo "<td class='id'>".$fila["IdOservicio"]."</td>";
    echo "<td class='placa'>".$fila["Placa"]."</td>";
    echo "<td class='status'>".$fila["IdStatusOperativo"] ."</td>";
    echo "<td class='fechafin'>".$fila["FechaHoraFin"]."</td>";
    echo "<td class='servicios'>".$fila["VentaTotal_Servicios"] ."</td>";
    echo "<td class='repuestos'>".$fila["VentaTotal_Repuestos"] ."</td></tr></table>";
     
}
mysqli_close($conexion);
?>
</body>
</html>

