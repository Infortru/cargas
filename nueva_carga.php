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
        <label for="identificador" class="form-label">Identificador:</label><br>
        <input type="text" name="identificador" class="form-control" id="identificador" disabled value="<?php echo $_GET["Id"]; ?>"><br>  
        <label for="fecha" class="form-label">Fecha:</label><br>
        <input type="text" name="fecha" id="fecha" class="form-control" placeholder="dd/mm/aa" ><br>
        <label for="numero" class="form-label">Número:</label><br>
        <input type="number" name="numero" id="numero" class="form-control"><br>
        <label for="cantidad" class="form-label">Cantidad:</label><br>
        <input type="number" name="cantidad" id="cantidad" class="form-control"><br>
        <label for="técnico" class="form-label">Técnico:</label><br>
        <input type="text" name="tecnico" id="tecnico" class="form-control"><br><br>
        <input type="submit" value="Aceptar" id="enviar" disabled>
    </form>
    <script src="validar_nueva_carga.js"></script>
</body>
</html>