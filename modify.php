<?php

    include("conexion.php");
    
  if(isset($_POST['ora2'])){

    if(strlen($_POST['name']) > 1)
    {
        $name = trim($_POST['name']);
        $destiny = trim($_POST['destiny']);
        $estadia = trim($_POST['estadia']);
        $query = "UPDATE `cliente` SET `name`='$name',`destiny`='$destiny',`country`='Mexico',`estadia`='$estadia' WHERE `name` LIKE '%".$name."%'";
        $result = mysqli_query($con,$query);

        
  }
}
?>