<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Florida</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../bootstrap.css'>

    <script src='main.js'></script>
</head>
<body>
    <h2>Listado de máquinas del Salón La Florida</h2>
    
    <table class="table table-striped table-bordered table-hover" width="50%" cellspacing="0">
        <thead class="table">
            <tr class="table table-primary">
                <th colspan="4" class="text-center">Máquinas</th> 
            </tr>
            <tr class="table table-secondary">
                <th>Identificador</th>
                <th>Denominación</th>
                <th>Acciones</th>
            </tr>
        </thead>
    <?php
        require("../../Modelo/conexion.php");

        $consulta="SELECT * FROM florida";
        $resultado=$conexion->prepare($consulta);
        $resultado->execute(array());

        while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
    ?>
        <tbody>
        <tr>
            <td><?php echo $fila["identificador"] ?></td>
            <td><?php echo $fila["nombre"] ?></td>
            <td>
                <a href="../../nueva_carga.php?Id=<?php echo $fila["identificador"]?>" class="btn btn-primary">Nueva</a>
                <a href="../../lista_cargas.php?Id=<?php echo $fila["identificador"]?>&Salon=Vistas/Salones_alicante/florida.php" class="btn btn-primary">Lista</a>
            </td>
        </tr>
    
    <?php
        };
    ?>
        </tbody>
   </table>
    <div class="text-center">
        <a href="../zonas/alicante.html" class="btn btn-primary">Volver</a>
    </div>
    <br><br>
   
</body>
</html>