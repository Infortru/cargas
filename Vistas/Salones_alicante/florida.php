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
    <?php
         try{
            $conexion = new PDO ("mysql: host=localchost; dbname=magarin", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $consulta="SELECT * FROM salon_florida";
            $resultado=$conexion->prepare($consulta);
            $resultado->execute(array());;
    ?>

        <table>
            <tr>
                <th>Identificador</th>
                <th>Denominación</th>
            </tr>
    <?php
        while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
    ?>
            <tr>
                <td><?php echo $fila["Identificador"] ?></td>
                <td><?php echo $fila["Nombre"] ?></td>
                <td><a href="../../nueva_carga.php?Id=<?php echo $fila["Identificador"]?>">Nueva</a></td>
            </tr>
    <?php
       };
    ?>
        </table>
    <?php   }catch(Exception $e) {
            die ("Error" . $e->getMessage());
        }finally{
            $conexion=null;
        }
    
    
    
    
    ?>
    
</body>
</html>