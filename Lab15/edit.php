<?php
    
        require_once("util.php");
        include("_header.html");
        include("_edit.html");


        if(isset($_POST["nombre"])){
   
        $id=htmlspecialchars($_POST['id']);
        $nombre=htmlspecialchars($_POST['nombre']);
        $apellido=htmlspecialchars($_POST['apellido']);
        $posicion=htmlspecialchars($_POST['posicion']);
        $telefono=htmlspecialchars($_POST['telefono']);
        
        
        if(edit($id, $nombre, $apellido, $posicion, $telefono)){
            
        echo "Tabla actualizada";
        }
        else{
            echo "no actualizada";
        }
        
        echo '<script language="javascript">';
            echo 'alert("Tabla actualizada")';
        echo '</script>';
        

        } else{

        }

    include("_footer.html");


?>