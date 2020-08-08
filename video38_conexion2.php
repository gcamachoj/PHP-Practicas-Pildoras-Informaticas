<html>
<head>
<meta charset="utf-8">
<style>
    table{
        width:50%;
        border:1px dotted #ff0000;
        margin: auto;
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

$query = "select * from Actividades";
$resultados = mysqli_query($conexion, $query);
while($fila=mysqli_fetch_row($resultados))
{
    echo "<table><tr><td>";
    echo $fila[0] . "</td><td>";
    echo $fila[1] . "</td><td>";
    echo $fila[2] . "</td><td>";
    echo $fila[3].  "</td><td></tr></table>";
    echo "<br>";
}
mysqli_close($conexion);
?>
</body>