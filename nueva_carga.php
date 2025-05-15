<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Nueva carga</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <div>
        <h4 class="text-center">Introducir nueva carga de la máquina: </h4>
    </div> 
    <form action="Modelo/intro_carga.php" method="post" id="formulario" style="width: 30%; margin: auto;">
        <input type="hidden" name="Salon" id="Salon" value="<?php echo $_GET["Salon"]?>">
        <label for="identificador" class="form-label">Identificador:</label>
        <input type="text" name="identificador" class="form-control" id="identificador" value="<?php echo $_GET["Id"]; ?>">  
        <label for="fecha" class="form-label">Fecha:</label>
        <input type="text" name="fecha" id="fecha" class="form-control" value="<?php echo date('d/m/y') ?>" autofocus>
        <label for="numero" class="form-label">Número:</label>
        <input type="number" name="numero" id="numero" class="form-control">
        <label for="cantidad" class="form-label">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" class="form-control">
        <label for="técnico" class="form-label">Técnico:</label>
        <input type="text" name="tecnico" id="tecnico" class="form-control">
        <input type="submit" value="Aceptar" id="enviar" disabled class="btn btn-primary" style="margin-top: 10px;">
        <a href="<?php echo $_GET["Salon"]?>" class="btn btn-primary" style="margin-top: 10px;">Volver</a>
    </form>
    <script src="validar_nueva_carga.js"></script>
</body>
</html>