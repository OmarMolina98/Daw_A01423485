<?php

    $name = "";$apellido = "";
    $email = "";$error = "";
    $telefono = 0;$nameErr="";

    if(isset($_POST['submit'])){ 
        
        $name = htmlspecialchars($_POST["name"]);
        $apellido = htmlspecialchars($_POST["apellido"]);
        $email = htmlspecialchars($_POST["email"]);
        $telefono = htmlspecialchars($_POST["phone"]);        
        
        if(!preg_match("/^[0-9]$/", $telefono)) {
            
            $error = $error."<br>"."Forma inválida";
        }
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = $error."<br>"."Correo invalido";
        }
      
    }

    
?>