<?php
    
    require_once("util.php");

    include("_header.html");
        
    $result = getJugadores();
   
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
    
    include("_footer.html");
    
 
?>