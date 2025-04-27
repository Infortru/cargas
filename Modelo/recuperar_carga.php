
<?php

    include("conexion.php");
    
    $nombre=$_GET["nombre"];
    $identificador=$_GET["id"];
    $numeroCarga=$_GET["serie"];
    $observaciones=$_GET["observaciones"];
    $fecha=date ("d-m-Y");

    try{
    $sql="UPDATE $identificador SET FechaRecuperacion='$fecha', Estado='Recuperada', FirmadoRecuperacion='$nombre', Observaciones='$observaciones' WHERE NumeroSerie=$numeroCarga";

    $resultado=$conexion->prepare($sql);
    $resultado->execute(array());
    }catch(Exception $e) {
        die ("Error" . $e->getMessage());
    }

    header("Location:../Vistas/Salones_alicante/florida.php");

    ?>
</body>
</html>