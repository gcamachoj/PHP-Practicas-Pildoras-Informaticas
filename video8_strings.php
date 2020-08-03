<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .resaltar{
            color:"#F00";
            font-weight:bold;
        }
    </style>

</head>
<body>
    <?php
    $nombre="juan";
    echo "<h1 class='resaltar'>Esto es una clase</h1>";
    echo '<h1 class="resaltar">Esto es una clase</h1>';
    echo "<h1 class=\"resaltar\">Esto es una clase</h1>";
    echo "<h1 class='resaltar'>Esto es una clase</h1>";
    
     echo "hola $nombre <br>";
     echo 'hola $nombre'.'<br>';   

//*** COMPARACION DE VARIABLES */

    $v1="casa";
    $v2="CASA";
        $resultado=strcmp($v1, $v2);//DEVIELVE 1 SI NO SON IGUALES Y 0 SI SON IGUALES
        echo "el resutado es $resultado<br>";
        $resultado=strcasecmp($v1, $v2);//DEVIELVE 1 SI NO SON IGUALES Y 0 SI SON IGUALES sin imporatr si estan en may o minusc
        echo "el resutado es $resultado<br>";
      
      ////////////////////////////
      
      if($resultado){
          echo "no coinciden<br>";
      }
      else
        {    
      echo "coinciden<br>";
        }

        ///////////////////////////

        if(!$resultado){
            echo "coinciden";
        }
        else
        {
            echo "no coinciden";
        }
    
    
    ?>


</body>
</html>