<?php

 include ('config/db.php');

 if(!empty($_POST['name'])){

  $name = $_POST['name'];
  
  $query = mysqli_query($conexion,"INSERT INTO productos(name) VALUES ('$name')");
  
  if($query){
      header('location:index.php');
  }
}
?>