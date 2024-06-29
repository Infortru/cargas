
<?php

    include("conexion.php");
    
    $nombre=$_GET["Nombre"];
    $identificador=$_GET["Id"];
    $numeroCarga=$_GET["Serie"];
    $fecha=date ("d-m-Y");

    //include("../vista_rec_carga.php");

    try{
    $sql="UPDATE $identificador SET FechaRecuperacion='$fecha', Estado='Recuperada', FirmadoRecuperacion='$nombre' WHERE NumeroSerie=$numeroCarga";

    $resultado=$conexion->prepare($sql);
    $resultado->execute(array());
    }catch(Exception $e) {
        die ("Error" . $e->getMessage());
    }

    //header("Location:../Vistas/Salones_alicante/florida.php");

    ?>
</body>
</html>