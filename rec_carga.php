<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Recuperar carga</title>
</head>
<body>
    <?php
        $serie=$_GET["Serie"];
    ?>
    <form action="Modelo/recuperar_carga.php" method="get" id="formulario" style="width: 30%; margin: auto;">
        <input type="text"  name="id" value="<?php echo $_GET["Id"]; ?>" hidden>
        <input type="text"  name="salon" value="<?php echo $_GET["Salon"]; ?>" hidden>
        <label for="serie" class="form-label">Número de serie:</label><br>
        <input type="text"  name="serie" id="serie" class="form-control" value="<?php echo $_GET["Serie"]; ?>">
        <label for="fecha" class="form-label">Fecha:</label><br>
        <input type="text" name="fecha" id="fecha" class="form-control" value="<?php echo date('d/m/y') ?>" autofocus><br>
        <label for="nombre" class="form-label">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre"class="form-control" ><br><br>
        <label for="obervaciones" class="form-label">Observaciones:</label><br>
        <textarea rows="4" cols="20" name="observaciones" id="obervaciones" class="form-control"></textarea><br>
        <input type="submit" value="Recuperar" id="enviar" class="btn btn-primary">
        <a href="./lista_cargas.php?Id=<?php echo $_GET['Id']?>&Salon=<?php echo $_GET['Salon']?>" class="btn btn-danger">Cancelar</a>
    </form>
</body>
</html>