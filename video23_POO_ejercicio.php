<?php
    Class Bicicleta{

        var $llantas;
        var $timon;
        var $color;
        var $pedal;
        var $asiento;
        var $tipo;

        function Bicicleta(){
            
            $this->timon=1;
            $this->llantas=2;
           $this->color="Color de Fabrica";
            $this->pedal="Pedal genérico";
            $this->asiento="Asiento genérico";
            $this->tipo="Corriente";

        }

        function paseo(){
            echo "La bicicleta esta dando un paseo<br>";
        }

         function cambiar_llantas($ll_nuevas){
             echo "La bucicleta tiene " .$ll_nuevas ." llantas nuevas.<br>";         }
        
       function guardar_bici($nombre){
           echo "La bicicleta ". $nombre ." se ha guardado<br>";
       }      
    }

    $mountain= new Bicicleta;
   echo  $mountain->paseo();

  echo $mountain->cambiar_llantas(6);
   
  $cross=new Bicicleta;
    $cross->guardar_bici('camila');

     echo $cross->color;   




?>