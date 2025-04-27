<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cargas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <table width="50%">
        <thead>
            <th>FECHA</th>
            <th>NÚMERO</th>
            <th>CANTIDAD</th>
            <th>TÉCNICO</th>
            <th>ESTADO</th>
            <th>FECHA RECUPERACIÓN</th>
            <th>FIRMADO RECUPERACIÓN</th>
            <th>OBSERVACIONES</th>
        </thead>


<?php

    include("Modelo/conexion.php");
    echo $_GET["Id"];
    $identificador=$_GET["Id"];
    $salon=$_GET["Salon"];

    try{
        $sql="SELECT * FROM $identificador";
        $resultado=$conexion->prepare($sql);
        $resultado->execute(array());
        
        while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
            ?>
                        <tr>
                            <td><?php echo $fila["Fecha"] ?></td>
                            <td><?php echo $fila["NumeroSerie"] ?></td>
                            <td><?php echo $fila["Cantidad"] ?></td>
                            <td><?php echo $fila["Firmado"] ?></td>
                            <td><?php echo $fila["Estado"] ?></td>
                            <td><?php echo $fila["FechaRecuperacion"] ?></td>
                            <td><?php echo $fila["FirmadoRecuperacion"] ?></td>
                            <td><?php echo $fila["Observaciones"] ?></td>
                            <?php
                                if($fila["Estado"]!="Recuperada"){ ?>
                            <td><button><a href="vista_rec_carga.php?Serie=<?php echo $fila["NumeroSerie"]?>&Id=<?php echo $identificador?>">Recuperar</a></button></td>
                            <?php } ?>
                        </tr>
                    
            <?php } ?>
        </table>
        <button><a href=<?php echo $salon ?>></a>Volver</a></button>
        
    <?php
    $resultado->closeCursor();
    }catch(Exception $e) {
        die ("Error" . $e->getMessage());
    }
    ?>
      
    </body>
</html>