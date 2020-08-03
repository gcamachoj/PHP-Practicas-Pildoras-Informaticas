<?php
$nombre="juan";



function Damenombre()
    
    {
        global $nombre;
        $nombre="el nombre es ". $nombre;
      
    }
Damenombre();


echo $nombre;

?>