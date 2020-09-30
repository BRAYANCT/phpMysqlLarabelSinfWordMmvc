<?php 

if (isset($_GET['numero5'])&&isset($_GET['numero6'])) {
    
    $numero3=$_GET['numero5'];
    $numero4=$_GET['numero6'];

    
    if ($numero3<$numero4) {
        echo "los numeros entre $numero3 y $numero4 son : "."  ";
            
            for ($numero3; $numero3 <=$numero4 ; $numero3++) { 
                
                if ($numero3%2!=0) {
                
                    echo ($numero3)." Es IMPAR"."<br>";
                }else{
                    echo ($numero3)." Es PAR"."<br>";
                }
            }
        }else{
           
            echo'el numero no puede ser mayor al numero 1';
        }

}else{
    echo 'No hay numeros en el metodo get';
}