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
//header("Location: http://infortru.com/../nueva_carga.php?Id=".$_POST["identificador"]);
    include("conexion.php");

    $identificador=$_POST["identificador"];
    $fecha=$_POST["fecha"];
    $numero=$_POST["numero"];
    $cantidad=$_POST["cantidad"];
    $tecnico=$_POST["tecnico"];
    $salon=$_POST["Salon"];
    
    $consulta="SELECT * FROM $identificador WHERE NumeroSerie=$numero";
    $resultado=$conexion->prepare($consulta);
    $resultado->execute(array());
    $fila=$resultado->fetch(PDO::FETCH_ASSOC);
    if($fila){
        echo "<h3 class='text-danger'>El número de serie ya existe en la base de datos.</h3>";
    }else{
        $sql="CREATE TABLE IF NOT EXISTS $identificador (Fecha DATE, NumeroSerie INT, Cantidad INT, Firmado VARCHAR(50), Estado VARCHAR(50), FechaRecuperacion DATE, FirmadoRecuperacion VARCHAR(50), Observaciones TEXT)";
        $resultado=$conexion->prepare($sql);
        $resultado->execute();
        $sql="INSERT INTO $identificador (Fecha, NumeroSerie, Cantidad, Firmado, Estado) VALUES ('$fecha', $numero, $cantidad, '$tecnico', 'Activa')";
        $resultado=$conexion->prepare($sql);
        $resultado->execute();
        $resultado->closeCursor();
        echo "<h3 class='text-success'>Carga introducida correctamente.</h3>";
       
        $resultado->closeCursor();
    }
    ?>
    <a href="../nueva_carga.php?Id=<?php echo $_POST["identificador"]?>&Salon=<?php echo $_POST["Salon"]?>" class="btn btn-primary">Volver</a>
</body>
</html>


