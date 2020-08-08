<html>
<head>
<meta charset="utf-8">
<style>
    table{

        width:80%;
        border:1px solid #ff0000;
        border-collapse:collapse;
    
    }

    .C1{
        width:10%;
        text-align:center;
        border: red 1px solid;
        text-align:right;
        padding:5px;
    }
    .c2{
        width:80%;
        border: red 1px solid;
        padding:5px ;
    }
    .TH1{
        width:10%;
        text-align:center;
        border: red 1px solid;
        text-align:center;
    }
        
    
</style>

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
    echo "<th class='TH1'>ID</th>";
    echo "<th class='C2'>PLACA</th>";
 


$query = "select * from ordenesservicio where Placa like '%e%'";
$resultados = mysqli_query($conexion, $query);
while($fila=mysqli_fetch_assoc($resultados))
{
    echo "<table><tr>";
    echo "<td class='C1'>".$fila["IdOServicio"]."</td>";
    echo "<td class='C2'>".$fila["Placa"] ."</td></tr></table>";
    
    
 
}
mysqli_close($conexion);
?>
</body>
linea adicionada en la rama test
prueba test