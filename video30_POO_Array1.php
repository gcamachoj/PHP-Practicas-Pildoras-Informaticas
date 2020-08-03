<?php


/* ARRAY ASOCIATIVOS => SE INDEXAN POR NUMERO O INDICE CADA REGISTRO DEL ARRAY
/* ARRRAY INDEXADOS => SE ASIGNAN VALORS DE INDICE TEXTUAL O STRING PARA REFERIRSE A UN VALOR DE LA VARIABLE*/


/*  ARRAYS INDEXADOS:
========================
*/
$linea="<br>";
$semana[]="lunes";
$semana[]="martes";
$semana[]="miercoles";
$semana[]="Jueves";

echo $semana[1].$linea;
echo $semana[2].$linea;


// opcion 2

$mes=array('enero','febrero','marzo');
echo $mes[1].$linea;


//  ARRAYS asociativos:
//========================

$datos=array("nombre"=>"Guillermo", "Apellidos"=>"Guillermo", "Edad"=>34, "status"=>"Activo",);

echo $datos["nombre"];
echo $datos["Edad"];

?>
