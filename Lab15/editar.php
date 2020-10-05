<?php
    
    require_once("util.php"); 
    include("_header.html");  

    if ( (empty($_POST["id"]) || empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["posicion"]) || empty($_POST["telefono"]))) {
        
        die("Poner los datos faltantes");
    }

      
        $id = htmlspecialchars($_POST["id"]);
        $nombre = htmlspecialchars($_POST["nombre"]);
        $apellido = htmlspecialchars($_POST["apellido"]);
        $posicion = htmlspecialchars($_POST["posicion"]);
        $telefono = htmlspecialchars($_POST["telefono"]);

        if(isset($nombre) && isset($apellido) && isset($posicion)){
            
            if(is_numeric($id) && is_numeric($telefono)){
                
                if(insertNombre($id,$nombre,$apellido,$posicion,$telefono)){
                    
                   echo '<script language="javascript">';
                    echo 'alert("No guardo exitosamente")';
                    echo '</script>';
                }
                else{
                    echo '<script language="javascript">';
                    echo 'alert("Se guardo exitosamente")';
                    echo '</script>';
                }
            }
            else{
                
                echo("No se ha pudo registrar!");
            }
        }

    echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";    
    include("_footer.html");
    



?>