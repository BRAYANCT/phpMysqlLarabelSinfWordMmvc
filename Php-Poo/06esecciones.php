<?php 

try {
    
    throw new Exception('hay un error <br>' );

} catch (Exception $e) {   
    echo"<br> hay in error:-  s <br> ".$e->getMessage()."<br>";
    
}finally{
    echo"todo correcto";
}




