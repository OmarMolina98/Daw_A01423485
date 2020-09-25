<?php
    session_start();

    $_SESSION["user"] = htmlspecialchars($_POST["user"]);
    $_SESSION["pass"] = htmlspecialchars($_POST["pass"]);

    include("partials/_header2.html");
    include("partials/_menu.html");
    include("partials/_footer.html"); 
    
    
?>