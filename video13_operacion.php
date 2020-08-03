<style type="text/css"> 
.boton{
 
    margin-left:60px;
}
.resultado{
    color:green;
    font-size:16;
    background-color:yellow;

}
</style>
   <?php
    // ************codigo
    
    if(isset($_POST["boton"])){
        //$resultado="PULSO EL BOTON"
         $v1=$_POST["valor1"];
         $v2=$_POST["valor2"];
         $operacion=$_POST["operacion"];
    }
        global $operacion;
      
   

    function calcular($calculo){
        global $v1;
        global $v2;
      

        if(!strcmp("suma", $calculo))
            {
            echo "<p class='resultado'>EL resultado de la suma es " . ($v1+$v2)."</p>";
            }
            else if(!strcmp("resta", $calculo))
            {
            echo "EL resultado de la resta es " .($v1-$v2);
            }           
            else if(!strcmp("multiplicacion", $calculo))
            {
            echo "EL resultado de la multiplicacion es " .($v1*$v2);
            }           
            else if(!strcmp("division", $calculo))
            {
            echo "EL resultado de la division es " .($v1/$v2);
            }    
            else if(!strcmp("incremento", $calculo))
            {
            $v1++;
            echo "EL resultado del incremento en la variable 1 es ". $v1;
            }         
            else if(!strcmp("decremento", $calculo))
            {
              $v1--;  
            echo "EL resultado del decremento en la variable 1 es ".$v1;
            }             
            else {
                # code...
           }
        
        
    }
 
   
   
    

    ?>


</body>
</html>