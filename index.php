<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="estilos.css">
    <title>ICO</title>
</head>
<body>
<form action="principal.php" method="post">
    
    <div class="ventana" >
        <br>
        <label for="nnombre_usuario">Nombre usuario</label>  <br>
        <input type="text" name="nombre_usuario"  required placeholder="Ingresa tu Usuario" class="tamaño" >
        <br><br>
        <label for="contraseña">Ingresa tu contraseña</label> <br>
        <input name="contraseña" required placeholder="Contraseña"  class="tamaño">
        <br><br>
        <button>Enviar</button>
        <button class="btn btn-success" onclick="crearDatos()">Crear</button>
         <button class="btn btn-danger" onclick="eliminarDatos()">Eliminar</button>

        <br><br>

    </div>



</form>

    
</body>
</html>
