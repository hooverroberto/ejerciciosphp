<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Consulta de alumnos</title>
</head>
<body>
    
    <div class="container">
    <h1 class="mt-5 mb-5">Consulta de Productos</h1>   
    
    <?php
        $username = "root";
        $password = "";
        $database = "tienda";

        $mysqli = new mysqli("localhost", $username, $password, $database);
        $query = "SELECT * FROM producto";

        echo '<table class="table table-dark" border="2" cellpadding="2">
                <tr>
                    <th> <font face="Arial"> Id</font> </th>
                    <th> <font face="Arial"> Nombre</font> </th>
                    <th> <font face="Arial"> Código </font> </th>
                    <th> <font face="Arial"> Precio </font> </th> 
                    <th> <font face="Arial"> Imagen </font> </th>                  

                </tr>
            
        ';

        if($result = $mysqli->query($query)){
            while($row=$result->fetch_assoc()){
                $fiel1name = $row["nombre"];
                $fiel2name = $row["codigo"];
                $fiel3name = $row["precio"];
                $fiel4name = $row["imagen"];
                
                echo '<tr>
                    <td>'.$fiel1name.' </td>
                    <td>'.$fiel2name.' </td>
                    <td>'.$fiel3name.' </td>
                    <td>'.$fiel4name.' </td>
                </tr>';
            }
            $result->free();
        }
    ?>
    </div>
</body>
</html>