<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap.css">
    <title>Cargas</title>
</head>
<body>
    
<?php

    include("conexion.php");

    $identificador=$_POST["identificador"];
    $fecha=$_POST["fecha"];
    $numero=$_POST["numero"];
    $cantidad=$_POST["cantidad"];
    $tecnico=$_POST["tecnico"];

    $consulta="SELECT * FROM $identificador WHERE NumeroSerie=$numero";
    $resultado=$conexion->prepare($consulta);
    $resultado->execute(array());
    $fila=$resultado->fetch(PDO::FETCH_ASSOC);
    if($fila){
        echo "<h3 class='text-danger'>El número de serie ya existe en la base de datos.</h3>";
        echo "<br><a href='../nueva_carga.php?Id=$identificador&Salon=Vistas/Salones_alicante/florida.php' class='btn btn-primary'>Volver</a>";
        exit();
    }else{
    $sql="CREATE TABLE IF NOT EXISTS $identificador (Fecha DATE, NumeroSerie INT, Cantidad INT, Firmado VARCHAR(50), Estado VARCHAR(50), FechaRecuperacion DATE, FirmadoRecuperacion VARCHAR(50), Observaciones TEXT)";
    $resultado=$conexion->prepare($sql);
    $resultado->execute();
    $sql="INSERT INTO $identificador (Fecha, NumeroSerie, Cantidad, Firmado, Estado) VALUES ('$fecha', $numero, $cantidad, '$tecnico', 'Activa')";
    $resultado=$conexion->prepare($sql);
    $resultado->execute();
    $resultado->closeCursor();

    header("Location: ../nueva_carga.php?Id=$identificador&Salon=Vistas/Salones_alicante/florida.php");
    }
    ?>
    
</body>
</html>


