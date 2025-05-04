<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar carga</title>
</head>
<body>
    <?php
        $serie=$_GET["Serie"];
    ?>
    <form action="Modelo/recuperar_carga.php" method="get" id="formulario">
        <input type="text"  name="id" value="<?php echo $_GET["Id"]; ?>" hidden>
        <input type="text"  name="serie" value="<?php echo $_GET["Serie"]; ?>" hidden>
        <label for="fecha">Fecha:</label><br>
        <input type="text" name="fecha" id="fecha" value="<?php echo date('d/m/y') ?>" ><br>
        <label for="tecnico">Nombre:</label><br>
        <input type="text" name="tecnico" id="tecnico"><br><br>
        <label for="obervaciones">Observaciones:</label><br>
        <textarea rows="4" cols="20" name="observaciones" id="obervaciones"></textarea><br>
        <input type="submit" value="Recuperar" id="enviar" disabled>
    </form>
    <script src="validar_rec_carga.js"></script>
</body>
</html>