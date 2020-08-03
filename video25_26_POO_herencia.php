<?php

Class Carro{
    private $ruedas;
    var $color;
    var $motor;


    function Carro(){   //metodo constructor
            
            $this->ruedas=4;
            $this->color="";
            $this->motor=1600;


    }

    function arrancar(){
        echo "Estoy arrancando<br>";
    }

    function girar(){
        echo "Estio girando<br>";
    }

    function frenar(){
        echo "Estoy frenando<br>";
    }

    function establece_color($color_coche, $nombre_coche){
        $this->color=$color_coche;
        echo "El color del coche ". $nombre_coche . " es ". $this->color ."<br>";
    }
        
    function acelerar($nombre){

        echo "el carro ". $nombre ."  esta acelerando";

    }
    
}

//----------------------------------------------------------------------------------------------------

Class Camion extends Carro{
    var $ruedas;
    var $color;
    var $motor;

     function  Camion(){   //metodo constructor
        
    
            $this->ruedas=8;
            $this->color="";
            $this->motor=1600;
           
     } 

     function establece_color($color_camion, $nombre_camion)
     {
        $this->color=$color_camion;
        echo "El color del camion ". $nombre_camion . " es ". $this->color ."<br>";
   
     }

     function arrancar(){
    parent::arrancar();
    echo "Camion arrancando";
     }

}

$mazda=new Carro();
echo "el mazda<br>";
echo $mazda->ruedas."<br>";


$Foton=new Camion();
echo $Foton->ruedas."<br>";
$Foton->arrancar();
$Foton->establece_color('azul','Fotoncito');
$Foton->arrancar();

?>
