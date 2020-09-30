<?php 

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {

    
    $numero1=($_GET['numero1']);
    $numero2=($_GET['numero2']);
    
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $multiplicacion=$numero1*$numero2;
    $divicion=$numero1/$numero2;
    
    echo 'CALCULADORA' ."<br>";
    echo "La suma de los numeros $numero1 + $numero2 =". $suma."<br>";
    echo "La suma de los numeros $numero1 - $numero2 =". $resta."<br>";
    echo "La suma de los numeros $numero1 * $numero2 =". $multiplicacion."<br>";
    echo "La suma de los numeros $numero1 / $numero2 =". $divicion."<br>";
}else{
    echo'no hay nada en los enunciados';
}


?>