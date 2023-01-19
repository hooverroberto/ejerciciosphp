<?php

if(isset($_POST['enviar'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];    

       $sumar=$num1 + $num2;
       $restar=$num1 - $num2;
   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de los input</title>
</head>
<body>
   
    <form method="post">
        <label for="">Inserta un número: </label>
        <input type="number" id="num1" name="num1">
        <br/>
        <label for="">Inserta el siguiente número: </label>
        <input type="number" id="num2" name="num2">
        <br/>
        <input type="submit" name="enviar" value="Sumar" id="sumar">
        <input type="submit" name="enviar" value="Restar" id="restar">
    </form>

    
    <p>
        <?php
        if(isset($_POST['enviar']) == 'sumar'){
            { echo "El resultado de la suma: ". $sumar;}
        }elseif(isset($_POST['enviar']) == 'restar')
            { echo "El resultado de la resta: ". $restar;}
        ?>
    </p>
    
</body>
</html>