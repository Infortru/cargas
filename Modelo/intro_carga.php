<?php

    include("conexion.php");

    $identificador=$_POST["identificador"];
    $fecha=$_POST["fecha"];
    $numero=$_POST["numero"];
    $cantidad=$_POST["cantidad"];
    $tecnico=$_POST["tecnico"];

    $sql="INSERT INTO $identificador (Fecha, NumeroSerie, Cantidad, Firmado, Estado) VALUES ('$fecha', $numero, $cantidad, '$tecnico', 'Activa')";
    $resultado=$conexion->prepare($sql);
    $resultado->execute();

    header("Location:../Vistas/Salones_alicante/florida.php");

