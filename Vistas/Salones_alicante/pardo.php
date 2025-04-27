<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pardo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
         try{
            $conexion = new PDO ("mysql: host=localchost; dbname=magarin", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión OK";
        }catch(Exception $e) {
            die ("Error" . $e->getMessage());
        }finally{
            $conexion=null;
        }
    
    
    
    
    ?>
    
</body>
</html>