<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar carga</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <label for="Nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"><br><br>
        <label for="obervaciones">Observaciones:</label><br>
        <textarea rows="4" cols="20" name="observaciones" id="obervaciones"></textarea>
        <input type="submit" value="Recuperar">
    </form>
</body>
</html>