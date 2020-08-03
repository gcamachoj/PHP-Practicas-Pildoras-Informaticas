<?php

function incrementa(&$valor1)
    {
     $valor1++;
     return $valor1;   

    }
    
    $var2=20;
    echo incrementa($var2). "<br>";

    echo $var2;