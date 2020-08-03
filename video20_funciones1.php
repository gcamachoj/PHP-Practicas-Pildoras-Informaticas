<?php
echo "FUNCIONES PREDEFINIDAS:<br>";
ECHO "=======================<br><br>";
echo "Funcion predefinida para convertir texto a mayusc/minusc<br><br>";


$palabra="DESTORNILLADOR";
    echo (strtolower($palabra));
    echo "<br>";
    echo (strtoupper($palabra))."<br><br><br>";

?>



<?php
    echo "FUNCIONES PROPIAS DEL USUARIO:<br>";
    ECHO "===================<br><br>";
    echo "Funcion PARA SUMAR DOS VARIABLES<br>";
    
function suma($vd1, $vd2)
 

    {
    $resultado=$vd1+$vd2;
    return $resultado;
    
    }
    
    echo "Num1 = 2 y num2 es 3 El resultado de la funcion es: ";
    echo(suma(2,3))."<br>";

    

    echo suma(2,3)."<br><br><br>";


    ?>

    <?php

echo "FUNCIONES PROPIAS PASANDO PARAMETROS CON ARGUMENTO POR DEFECTO:<br>";
ECHO "===================================================================<br><br>";
ECHO "funcion para pasar una frase a mayuscula pasando parametros<br>";

function convertir($frase,$conversion=true)
    {
        $frase=strtolower($frase);
       // var_dump($frase);
        if($conversion==true){
            $result =ucwords($frase);
        }
        else
        {
           $result= strtoupper($frase);
        }
    
    return $result;
  
    }

    echo convertir("Pola parce",false);










?>