<?php

    include("conexion.php");
    if(isset($_POST['buscar'])){
        $name = trim($_POST['name']);
        $query = "SELECT * FROM `cliente` WHERE `name` LIKE '%".$name."%'";
        $result = mysqli_query($con,$query);

        if($result){
            while($row = mysqli_fetch_array($result)){
               ?>
                <script>
             alert("¡Usuario Encontrado!  Nombre: <?= $row['name'] ?>  País de destino: <?= $row['destiny'] ?>  País de procedencia: <?= $row['country'] ?>   Tiempo de estadía: <?= $row['estadia'] ?> días");
             </script>
             <h3 class="uwu2">
             
                        
            </div>
            <?php
            }
    }else {
        ?>
        <script>
        alert("¡UPS! Ha ocurrido un error...");
        </script>
        <?php
    }
}
?>