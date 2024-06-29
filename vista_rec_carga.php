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
    <form action="Modelo/recuperar_carga.php" method="get">
        <input type="text"  name="id" value="<?php echo $_GET["Id"]; ?>" hidden>
        <input type="text"  name="serie" value="<?php echo $_GET["Serie"]; ?>" hidden>
        <label for="Nombre">Nombre:</label>
        <input type='text' name='nombre' id='nombre'><br><br>
        <label for="obervaciones">Observaciones:</label><br>
        <textarea rows="4" cols="20" name="observaciones" id="obervaciones"></textarea><br>
        <input type="submit" value="Recuperar">
    </form>
</body>
</html>