<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduccion a Mvc</title>
    <style>
    *{
        background-color: #000000;
    }
        </style>
</head>
<body>
    <h1>Modelo Vista Controlador</h1>
    <?php 
    require_once './Controllers/usuarios.controlers.php';

    $controlador=new UsuarioController();
    $controlador->mostrarTodos();
    $controlador-> crear();

        
    if(isset($_GET['action']) && method_exists($controlador,$_GET['action'])){

        $action=$_GET['action'];
        $controlador->$action;

    }else{
        echo "la pagina que buscas no existe";
    }
    ?>
</body>
</html>
