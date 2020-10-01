<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos desde php</title>
</head>
<body>

    <h1>Subir archivos desde php</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">

        <label for="imagen">Imagen</label>
        <input type="file" name="imagen" id="imagen"> <br> <br>
        <input type="submit" value="Enviar">

        
    </form>
</body>
</html>