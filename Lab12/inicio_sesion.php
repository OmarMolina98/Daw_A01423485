<?php
    session_start();

    if(isset($_POST['user'])){
        
         $_SESSION["user"] = htmlspecialchars($_POST["user"]);
        
    }

    if(isset($_POST['First'])){
        
        
        $_SESSION["First"] = htmlspecialchars($_POST["First"]);
        
    }

    if(isset($_POST['First'])){
        
        
        $_SESSION["Last"] = htmlspecialchars($_POST["Last"]);
        
    }


    if(isset($_POST['First'])){
        
        
    $_SESSION["Tele"] = htmlspecialchars($_POST["Tele"]);
        
        
        
    }
    
    if(isset($_POST['Origen'])){
        
        
        $_SESSION["Origen"] = htmlspecialchars($_POST["Origen"]);
        
    }


    include("partials/_header2.html");
    include("partials/_menu.html");
    include("partials/_footer.html"); 
    
    
    
?>