<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Florida</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
        <table>
            <tr>
                <th>Identificador</th>
                <th>Denominación</th>
            </tr>
    <?php
        require("../../Modelo/conexion.php");

        $consulta="SELECT * FROM salon_florida";
        $resultado=$conexion->prepare($consulta);
        $resultado->execute(array());

        while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
    ?>
            <tr>
                <td><?php echo $fila["Identificador"] ?></td>
                <td><?php echo $fila["Nombre"] ?></td>
                <td><button type="submit"><a href="../../nueva_carga.php?Id=<?php echo $fila["Identificador"]?>">Nueva</a></button></td>
                <td><button type="submit"><a href="../../lista_cargas.php?Id=<?php echo $fila["Identificador"]?>">Lista</a></button></td>
            </tr>
    <?php
       };
    ?>
   
</body>
</html>