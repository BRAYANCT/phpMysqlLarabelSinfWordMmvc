<?php 

if (isset($_GET['numero3'])&&isset($_GET['numero4'])) {
    
    $numero3=$_GET['numero3'];
    $numero4=$_GET['numero4'];

    
    if ($numero3<$numero4) {
        echo "los numeros entre $numero3 y $numero4 son : "."  ";
            
            for ($numero3; $numero3 <$numero4 ; $numero3++) { 
                
                    echo ($numero3).",";
            }
        }else{
           
            echo'el numero no puede ser mayor al numero 1';
        }

}else{
    echo 'No hay numeros en el metodo get';
}