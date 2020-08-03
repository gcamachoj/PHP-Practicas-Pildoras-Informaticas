<?php



$datos=array("nombre"=>"Guillermo", "Apellidos"=>"Camacho", "Edad"=>34, "status"=>"Activo",);
//$datos="Pedro";


$datos["Pais"]="España";

if(is_array($datos)){
    echo "Es un array <br>";
    }

    else{
        echo "No es un array";
    }   
////////////////////////////////////
//  RECORRER VARIABLES:


   foreach($datos as $clave=>$valor){
       echo "A $clave le corresponde $valor <br><br>";
   }

/////////////////////////////////////////////////////7
//          RECORRER ARRAYS INDEXADOS               //
//////////////////////////////////////////////////////





   $semana[]="Lunes";
   $semana[]="Martes";
   $semana[]="Miercoles";
   $semana[]="Jueves";
   $semana[]="Viernes";
   $semana[]="Sabado";
   $semana[]="Domingo";


for($i=0;$i<2;$i++){
    echo $semana[$i]."<br>";
}


echo "<br><br><br>";
for($i=0;$i<(count($semana));$i++)
    {
     echo $semana[$i]."<br>";
}

/////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><br><br>";
$mes=array("Diciembre","Enero","Febrero","Marzo","Abril", "Mayo", "Junio", "Julio","Agosto","Septiembre");


sort($mes);// ordenar un array en alfabeticamente
for ($i=0;$i<count($mes);$i++)
    {
    echo $mes[$i]."<br>";
    }
////////////////////////////////////////////////////////////////////////////////////////////////////

?>