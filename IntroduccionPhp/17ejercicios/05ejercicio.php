<?php


$juego=array(
    "ACCION"=>array("GTA 5","call of duty","PUG"),
    "AVENTURA"=>array("assasins creed","Crash bandicoot","Price of Persia"),
    "DEPORTE"=>array("Fifa 19","Pes 19","Moto G19")
    
   /*  array(
        "name"=>"accion",
        "categoria"=>"",
        "deporte"=>""
    ),
    array(
        "name"=>"aventura",
        "categoria"=>"",
        "deporte"=>""
    ),
    array(
        "name"=>"deporte",
        "categoria"=>"",
        "deporte"=>""
    ) */
);
$categorias=array_keys($juego);

?>
<table border="1">
    <tr>
        <?php foreach ($categorias as $categoria):?>
        
            <th> <?=$categoria?></th>
                
        <?php endforeach;?>
    </tr>
    <tr>
        <td> <?=$juego['ACCION'][0]?></td>
        <td> <?=$juego['AVENTURA'][0]?></td>
        <td> <?=$juego['DEPORTE'][0]?></td>
    </tr>   
    <tr>
        <td> <?=$juego['ACCION'][1]?></td>
        <td> <?=$juego['AVENTURA'][1]?></td>
        <td> <?=$juego['DEPORTE'][1]?></td>
    </tr>  
    <tr>
        <td> <?=$juego['ACCION'][2]?></td>
        <td> <?=$juego['AVENTURA'][2]?></td>
        <td> <?=$juego['DEPORTE'][2]?></td>
    </tr>  
<table>
