
<?php
header("Content-Type: text/html;charset=utf-8");
// SERVIDOR externo SLEFICACES

#$db_host="host17.latinoamericahosting.com";
#$db_name="sleficac_taller";
#$db_user="sleficac_gcamach";
#$db_contra="Logistica01*";


// SERVIDOR LOCAL 

$db_host="localhost";
$db_name="sleficac_taller";
$db_user="root";
$db_contra="";

// tener en cuenta en la conexion que el orden de las variables de conexion es el siguiente.

$conexion=mysqli_connect($db_host,$db_user,$db_contra,$db_name);

mysqli_set_charset($conexion, "utf8");
