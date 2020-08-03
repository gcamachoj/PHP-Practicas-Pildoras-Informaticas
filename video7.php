<?php
    
function incrementarvariable(){
    static $contador=0;
  
    $contador++;
    
    echo $contador."<br>";
    }
    
    incrementarvariable();
    incrementarvariable();
    incrementarvariable();

?>