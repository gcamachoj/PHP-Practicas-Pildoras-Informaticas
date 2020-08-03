<?php

Class Coche{
    var $ruedas;
    var $color;
    var $motor;

    function Coche(){   //metodo constructor

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

$renault = new Coche();
$mazda = new Coche();
$seat = new Coche();


$mazda->girar();
echo $mazda->ruedas ."<br>";

$renault->establece_color('rojo','batimovil');

$seat->establece_color('marron','jupiter');
$mazda->acelerar('pitufimovil');


?>
