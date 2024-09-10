<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/guardar-formulario" method="POST">
        @csrf
        <label>Nombre:<br><input type="text" name="nombre"></label><br>
        <label for="">Correo:<br><input type="email" name="correo"></label><br>
        <label for="">Mensaje:<br><textarea cols="30"name="mensaje"></textarea></label><br>

        <input type="submit" value="Enviar">
    

    </form>
</body>
</html>