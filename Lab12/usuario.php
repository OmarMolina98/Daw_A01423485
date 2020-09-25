<?php 
    session_start();

    include("partials/_header2.html");  

    echo "<div class=\"container\">
    <div class=\"col 6\">
    <p> Usuario</p>";
    
    echo $_SESSION["user"];
    echo"<br>";
    echo" </div><div class=\"col 6\"><p>Contraseña:</p>";
    
    echo $_SESSION["pass"];
    echo "</div></div> </div>";

    include("partials/_footer.html"); 
    
?>