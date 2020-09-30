<?php 
$numero=10;

echo " <table border='1'>";
echo "<tr>";
    for ($i=1; $i <=12 ; $i++) { 
        echo "<td> Tabla de $i </td>";
        
    }
echo "</tr>";
echo "<tr>";
    for ($a=1; $a <=12 ; $a++) { 
        echo "<td>";
            for ($b=0; $b <12 ; $b++) { 
                echo "$a x $b =".($a*$b)."<br>";
            }
        echo "</td>";
    }
echo "</tr>";

echo "</table>";
