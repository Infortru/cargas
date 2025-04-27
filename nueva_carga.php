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
    <form action="Modelo/intro_carga.php" method="post" id="formulario">
        <div>
            <?php echo $_GET["Id"]; ?>
        </div>
        <input type="text"  name="identificador" value="<?php echo $_GET["Id"]; ?>" hidden>
        <label for="fecha">Fecha:</label><br>
        <input type="text" name="fecha" id="fecha" placeholder="dd/mm/aa" ><br>
        <label for="numero">Número:</label><br>
        <input type="number" name="numero" id="numero"><br>
        <label for="cantidad">Cantidad:</label><br>
        <input type="number" name="cantidad" id="cantidad"><br>
        <label for="técnico">Técnico:</label><br>
        <input type="text" name="tecnico" id="tecnico"><br><br>
        <input type="submit" value="Aceptar" id="enviar" disabled>
    </form>
    <script src="validar_nueva_carga.js"></script>
</body>
</html>