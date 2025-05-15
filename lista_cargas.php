<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cargas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='bootstrap.css'>
</head>
<body>
    
    <table class="table table-striped table-bordered table-hover" width="50%" cellspacing="0">
        <thead class="table table-primary">
            <th>FECHA</th>
            <th>NÚMERO</th>
            <th>CANTIDAD</th>
            <th>TÉCNICO</th>
            <th>ESTADO</th>
            <th>FECHA RECUPERACIÓN</th>
            <th>FIRMADO RECUPERACIÓN</th>
            <th>OBSERVACIONES</th>
            <th>ACCIONES</th>
        </thead>


<?php

    include("./Modelo/conexion.php");
    echo '<h4>Listado de cargas de la máquina: ' . $_GET["Id"] . '</h4>';
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
                            <td><a href="rec_carga.php?Serie=<?php echo $fila["NumeroSerie"]?>&Id=<?php echo $identificador?>&Salon=<?php echo $salon?>" class="btn btn-primary">Recuperar</a></td>
                            <?php } ?>
                        </tr>
                    
            <?php } ?>
        </table>
        <a href="<?php echo $salon ?>" class="btn btn-primary">Volver</a>
         
    <?php
    $resultado->closeCursor();
    }catch(Exception $e) {
        die ("Error" . $e->getMessage());
    }
    ?>
      
    </body>
</html>