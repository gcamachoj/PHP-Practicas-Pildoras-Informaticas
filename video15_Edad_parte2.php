<?php

if(isset($_POST['enviando']))
    {
    
    $edad=$_POST['edad'];

    if($edad<18){
            Echo "tienes ". $edad . " y eres menor de edad<br>";
            }
            else if($edad<=40)
            {
            Echo "Tienees ". $edad . " y eres joven";
            }
            else if($edad>49)
            {       
                echo "Eres maduro, tienes " .$edad . "cuídate";
            }
    }
    
?>