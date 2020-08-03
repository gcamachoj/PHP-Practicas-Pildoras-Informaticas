<?php

$alimentos=array("fruta"=>array("tropical"=>"kiwy",
                                "citrico"=>"mandarina",
                                "otros"=>"manzana"),
                   
                "leche"=>array("animal"=>"vaca",
                                    "vegetal"=>"coco"),
                                     
                 "carne"=>array("vacuno"=>"lomo",
                                    "porcino"=>"vaca")
                                );


//echo $alimentos["carne"]["vacuno"];


foreach($alimentos as $clave_alim=>$alim){
    echo "$clave_alim:<br>";
        while(list($clave,$valor)=each($alim)){
            echo "$clave=$valor<br>";        }


}


echo var_dump($alimentos);
?>