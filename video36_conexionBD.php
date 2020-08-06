<html>
<head>
<meta charset="utf-8">
</head>

<body>

<?php
header("Content-Type: text/html;charset=utf-8");
// SERVIDOR SLEFICACES

$db_host="host17.latinoamericahosting.com";
$db_name="sleficac_taller";
$db_user="sleficac_gcamach";
$db_contra="Logistica01*";



// SERVIDOR LOCAL 
/*
$db_host="localhost";
$db_name="sleficac_taller";
$db_user="root";
$db_contra="";
*/
// tener en cuenta en la conexion que el orden de las variables de conexion es el siguiente.

$conexion=mysqli_connect($db_host,$db_user,$db_contra,$db_name);

mysqli_set_charset($conexion, "utf8");



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

echo $fila[0] . " ";
echo $fila[1] . " ";
echo $fila[2] . " ";
echo $fila[3]." ";
echo "<br>";
}
mysqli_close($conexion);
?>
</body>