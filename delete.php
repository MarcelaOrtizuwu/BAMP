<?php

include("conexion.php");

if(isset($_POST['eliminar'])){

    $name = trim($_POST['name']);
    $query = "DELETE FROM `cliente` WHERE `name` LIKE '%".$name."%'";
    $result = mysqli_query($con,$query);

    if($result){
        ?>
        <script>
        alert("Viaje Eliminado");
        </script>
        <?php
    }else{
        ?>
        <script>
        alert("¡UPS! Ha ocurrido un error...");
        </script>
        <?php
    }
}
?>