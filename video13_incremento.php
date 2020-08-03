<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


</head>
<body>

    <h1>CALCULADORA</h1>
     <form action="" method="post">
     <label for="valor1">Valor1</label>
     <input type="text" name="valor1">
     <br>
     <br>
     <label for="valor2">Valor3</label>
     <input type="text" name="valor2">
     <select name="operacion" id="" name="operacion">
     <option value="suma">Suma</option>
     <option value="resta">Resta</option>
     <option value="multiplicacion">Multiplicacion</option>
     <option value="division">Division</option>
     <option value="incremento">incremento</option>
     <option value="decremento">decremento</option>
     
     </select>
     <br>
     <br>

     <div class="boton">
     <input  type="submit" name="boton" id="button" value="Enviar" onClick="prueba">
     </div>
         
    </form>
    <?php
    include("video13_operacion.php");
    
    calcular($operacion);
    
    ?>

</body>
</html>