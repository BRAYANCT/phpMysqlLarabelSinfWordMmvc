<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion </title>
    <style>
        input{
            margin: 5px;
            /* line-height: 15px; */
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Validacion</h1>

    <?php

         if (isset($_GET['error'])) {
             $error=$_GET['error'];
             if ($error=='faltan_valores') {
                 
                 echo' <strong style="color: red;"> 
                         Faltan datos en los campos del formulario 
                       </strong>';
                 
             }
    }
    
    ?>
    <form method="POST" action="guardar.php">

        <hr>
             <label for="nombre">Nombre</label>
             <input type="text" name="nombre" id="nombre"  required > <br>
             
             <label for="apellidos">Apellidos</label>
             <input type="text" name="apellidos" id="apellidos" required> <br>
             
             <label for="edad">Edad</label>
             <input type="number" name="edad" id="edad" required><br>
            
             <label for="email">Email</label>
             <input type="email" name="email" id="email" required><br>
            
             <label for="password">Password</label>
             <input type="password" name="password" id="password"required><br>
           
             <label for="url">URL</label> 
             <input type="url" name="url" id="url" required><br>
             
            <label for="descripcion">descripcion</label>
             <textarea name="descripcion" id="descripcion" required></textarea> <br>
             <input type="submit" value="Enviar">
        <hr>

    </form>
</body>
</html>