<?php
// se puede consultar mas funciones matematicas en google introducionedo funciones matematicas php

echo " * Numnero 1 aleatorio ". rand(). "<br>";
echo " * Numero 2 aleatorio entr 1 y 30:  " . rand(1,30)."<br>"; 
$num1=rand();
echo "Numero 3 es ".$num1."<br>";

$num2=rand(100,200);
echo "Numero 4 es entre 100 y 200: " .$num2."<br>";

$base=10;
$exponente=2;
$num3=pow($base,$exponente);
echo "Numero 5 es con la base ".$base . " y exponente: " . $exponente. "El numero es: <strong>".$num3 ."</strong><br>";

$num6=3456.3445;
$num6round=round($num6);
echo "El valor ". $num6 ."redondeado es ".$num6round ."<br>";

$num7=3456.3445;
$num7round=round($num7,2);
echo "El valor del nuemero 7: ". $num7 ."redondeado es a dos decumales ".$num7round ."<br>";


$num8="2000";
echo "El valor del numero 8 y tipo es: " .var_dump($num8) ." ".$num8."<br>";
$num8conv=(int)$num8;
echo "Es el valor convertido del numero ". $num8 .var_dump($num8conv) .  " convertido";
//$num7round=round($num7,2);
//echo "El valor ". $num7 ."redondeado es a dos decumales ".$num7round ."<br>";




?>