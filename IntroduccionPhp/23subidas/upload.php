<?php

$archivo = $_FILES['imagen'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if ($tipo=="image/jpg" || $tipo=="image/jpeg " || $tipo=="image/png" || $tipo=="image/gif" ) {

    if (!is_dir('images')) {

        mkdir('images',0777);
    
    }

    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);

   // header("Refresh: 5; URL=index.php");
    echo 'Imagen subida correctamente';

}else{
    header("Refresh: 5; URL=index.php");
    echo 'sube una imagen con formato correcto';
    
}


//var_dump( $archivo);
//die();
?>