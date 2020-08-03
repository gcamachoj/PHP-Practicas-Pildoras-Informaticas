<?php

$var1=true;
$var2=false;

$resultado=$var1 && $var2;

$s= "<br";
//echo $var1.$s;
//echo $var2.$s;
//echo $resultado.$s; //resultado=false

if($resultado==true)
    {
    echo"correcto";
    }
    else
       {
        echo "incorrecto";
        }

        
        // sentencia 2
        $resultado2=$var1 and $var2;

        if($resultado2==true)
    {
    echo"correcto";
    }
    else
       {
        echo "incorrecto";
        }
?>