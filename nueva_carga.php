<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Nueva carga</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="Modelo/intro_carga.php" method="post">
        <div>
            <?php echo $_GET["Id"]; ?>
        </div>
        <input type="text"  name="identificador" value="<?php echo $_GET["Id"]; ?>" hidden>
        <label for="fecha" class="etiqueta">Fecha:</label><br>
        <input type="text" name="fecha" class="entrada" id="fecha"><br>
        <label for="numero" class="etiqueta">Número:</label><br>
        <input type="number" name="numero" class="entrada" id="numero"><br>
        <label for="cantidad" class="etiqueta">Cantidad:</label><br>
        <input type="number" name="cantidad" class="entrada" id="cantidad"><br>
        <label for="técnico" class="etiqueta">Técnico:</label><br>
        <input type="text" name="tecnico" class="entrada" id="tecnico"><br><br>
        <input type="submit" value="Aceptar">
    </form>
    
</body>
</html>