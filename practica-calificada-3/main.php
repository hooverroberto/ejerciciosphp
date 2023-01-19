

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Operaciones aritméticas</title>
</head>
<body>
    
    <h1> <?php echo "Funciones & Variables & Input PHP" ?> </h1>
    <?php print '<h2>Nivel 4 </h3>' ?>
    <hr/>
    <form action="calcular.php" method="post">
        <h1>Operaciones aritméticas</h1>
        <label for="">Operación</label>
        <select name="operacion" id="">
          <option value="Sumar">Sumar</option>
          <option value="Restar">Restar</option>
          <option value="Multiplicar">Multiplicar</option>
          <option value="División">División</option>
          <option value="Módulo">Módulo</option>
          <option value="Exponente">Potencia</option>
        </select>
        <label for="">Valor número 1: </label>
        <input type="number" name="num1">
        <label for="">Valor número 2 </label>
        <input type="number" name="num2">
        <input type="submit" value="Calcular">
      </form>
</body>
</html>