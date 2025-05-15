<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css">
    <title>Cargas</title>
</head>
<body>
    
</body>
</html>
<?php
    
    include("conexion.php");
    
    $nombre=$_GET["nombre"];
    $identificador=$_GET["id"];
    $numeroCarga=$_GET["serie"];
    $observaciones=$_GET["observaciones"];
    $fecha=date ("d-m-Y");
    $salon=$_GET["salon"];

    try{
    $sql="UPDATE $identificador SET FechaRecuperacion='$fecha', Estado='Recuperada', FirmadoRecuperacion='$nombre', Observaciones='$observaciones' WHERE NumeroSerie=$numeroCarga";

    $resultado=$conexion->prepare($sql);
    $resultado->execute(array());
    }catch(Exception $e) {
        die ("Error" . $e->getMessage());
    }
    ?>
    <a href="../lista_cargas.php?Id=<?php echo $identificador?>&Salon=<?php echo $salon?>" class="btn btn-primary">Volver</a>
</body>
</html>