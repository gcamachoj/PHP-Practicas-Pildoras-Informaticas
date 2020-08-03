<?php

Class Carro{
    var $ruedas;
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

Class Camion{
    var $ruedas;
    var $color;
    var $motor;

    function Camion(){   //metodo constructor

            $this->ruedas=8;
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
/*
$volvo=new Camion();
echo $volvo->ruedas."<br>";


$bmw=new Carro();
echo $bmw->ruedas;
*/
?>