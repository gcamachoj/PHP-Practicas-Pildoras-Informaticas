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
     <form action="video15_Edad_parte2.php" method="post">
     <label for="valor1">nombre</label>
     <input type="text" name="nombre">
     <br>
     <br>
     <label for="valor2">edad</label>
     <input type="text" name="edad">
  
     <br>
     <br>

     <div class="boton">
     <input  type="submit" name="enviando" id="button" value="Enviar" onClick="prueba">
     </div>
         
    </form>



</body>
</html>