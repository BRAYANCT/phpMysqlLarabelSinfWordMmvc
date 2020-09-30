<?php
    $error='faltan_valores';

    if (!empty($_POST['nombre'] ) || !empty($_POST['apellidos']) ||
        !empty($_POST['edad'])  || !empty($_POST['email']) ||
        !empty($_POST['password'])  || !empty($_POST['url']) ||
        !empty($_POST['descripcion'])) {
        
          $error='Ok';

          $nombre=$_POST['nombre'];
          $apellidos=$_POST['apellidos'];
          $edad=$_POST['edad'];
          $email=$_POST['email'];
          $password=$_POST['password'];
          $url=$_POST['url'];
          $descripcion=$_POST['descripcion'];

            if (!is_string($nombre) || !preg_match("/[a-zA-Z]+/",$nombre)) {
                $error='nombre';
                header("location:index.php?error=$error");
            }
            if (!is_string($apellidos) || !preg_match("/[a-zA-Z]+/",$apellidos)) {
                $error='apellido';
                header("location:index.php?error=$error");
            }
            if (is_int($edad) || !filter_var($edad,FILTER_VALIDATE_INT)) {
                $error='edad';
                header("location:index.php?error=$error");
            }
            if (!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $error='email';
                header("location:index.php?error=$error");
            }
            if (!is_string($password) || strlen($password)<5) {
                $error='pass$password';
                header("location:index.php?error=$error");
            }
            if (!is_string($url) || !filter_var($url,FILTER_VALIDATE_URL)) {
                $error='url';
                header("location:index.php?error=$error");
            }
            if (!is_string($descripcion) || !preg_match("/[a-zA-Z]+/",$descripcion)) {
                $error='descripcion';
                header("location:index.php?error=$error");
            }

    
    }else{
        $error='faltan_valores';
        header("location:index.php?error=$error");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llegada de formularios</title>
</head>
<body>
    <h1>Llegada de formularios</h1>

    <?php if ($error=="Ok"):?>
        <p> <?=$nombre?></p>
        <p> <?=$apellidos?></p>
        <p> <?=$edad?></p>
        <p> <?=$email?></p>
        <p> <?=$password?></p>
        <p> <?=$url?></p>
        <p> <?=$descripcion?></p>
    <?php endif;?>
    
</body>
</html>