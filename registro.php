<?php

    include("conexion.php");
    
  if(isset($_POST['ora'])){

    if(strlen($_POST['name']) > 1 && strlen($_POST['destiny']) > 1 && strlen($_POST['estadia']))
    {
        $name = trim($_POST['name']);
        $destiny = trim($_POST['destiny']);
        $estadia = trim($_POST['estadia']);
        $query = "INSERT INTO `cliente`(`name`, `destiny`, `country`, `estadia`) VALUES ('$name','$destiny','Mexico','$estadia')";
        
        $result = mysqli_query($con,$query);

        
    }else{
    }
  }
?>