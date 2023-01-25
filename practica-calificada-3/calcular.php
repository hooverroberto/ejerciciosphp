<?php
$operador=$_POST['operacion'];
$num1=$_POST['num1'];
$num2=$_POST['num2'];

if($operador == 'Sumar'){
    $resultado = $num1 + $num2;
}elseif($operador == 'Restar'){
    $resultado = $num1 - $num2;
}elseif($operador == 'Multiplicar'){
    $resultado = $num1 * $num2;
}
elseif($operador == 'División'){
    $resultado = $num1 / $num2;
}
elseif($operador == 'Módulo'){
    $resultado = $num1 % $num2;
}else{
    $resultado = $num1 ** $num2;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <div class="resultado">
    <h1>Resultado de la operación <?php echo $operador ?></h1>
    <p>Valor número 1: <?php echo $num1; ?> </p>
    <p>Valor número 2: <?php echo $num2; ?> </p>
    <p class="res">Resultado: <?php echo $resultado ?></p>
    <a href="./main.php">Regresar</a>
    </div>

    
</body>
</html>