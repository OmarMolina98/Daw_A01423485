<?php

require_once ("util.php");

$result = getNombre();

echo "<h3>Tabla completa de Jugadores</h3>";

if(mysqli_num_rows($result)>0){
        
    echo"<br>";
    echo"Tabla General de Datos";
    echo"<br>";
    echo"<table><br>";
    
    while($row = mysqli_fetch_assoc($result)){
        
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["nombre"]."</td>";
        echo "<td>".$row["apellido"]."</td>";
        echo "<td>".$row["posicion"]."</td>";
        echo "<td>".$row["telefono"]."</td>";
        echo "</tr>";

    }
   
    echo"</table>";
        
    }
    
?>