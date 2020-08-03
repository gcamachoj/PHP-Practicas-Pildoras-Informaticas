<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // BUCLES DETERMINADOS 
    //LOS BUCLES DETERMINADOS EN PHP SON 1)WILE Y  2)DO WHILE
    //WILE EJECUTE LA LOGICA SOLO SI NO SE CUMPLE LA CONDICION 
   
   
    echo "<br><br><br>";
    echo "<strong>bucle while</strong><br>";
    echo "==============<br><br>";
   
    $var1=0;
    while($var1<6)
    {
        echo "codigo del bucle while". "<br>";
        $var1++;
        echo $var1."<br>";
    }
    echo "salida del bucle";

    ?>

    <?php
    //BUCMLE DO WHILE: EJECUTA LA LOGICA AL MENOS LA PRIMERA VEZ Y SI LA CUNDICION NO SE CUMPLE ENTONCES GENERA UN NUEVO CICLO
    
    
    $var2=7;
    $var3=0;

echo "<br><br>";

    echo "<strong>bucle do while</strong><br>";
    echo "==============<br><br>";
    do{
        echo "Se ejecutara la condicion al menos la primera vez (do while)<br>";
        echo "la variable var2 vale inicialmente ".$var2."<br>";
        $var3++;
        $var2++;
        echo "ciclo numero ".$var3. "<br>"; 
        echo "ahora la variable var2 vale:".$var2."<br>";
         }
        while($var2<7);
        echo "hemos salido del bucle do while porque la condicion no se cumple pero se ejecuto la primera vez antes de evaluarse.<br>";
    ?>