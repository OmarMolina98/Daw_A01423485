<?php

require_once("util.php");


if(isset($_POST["submit"]) && !empty($_POST["submit"])){   
    
    $_POST['id']=htmlspecialchars($_POST['id']);
    $_POST['nombre']=htmlspecialchars($_POST['nombre']);
    $_POST['apellido']=htmlspecialchars($_POST['apellido']);
    $_POST['posicion']=htmlspecialchars($_POST['posicion']);
    $_POST['telefono']=htmlspecialchars($_POST['telefono']);
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $posicion = $_POST['posicion'];
    $telefono = $_POST['telefono'];

    //validar datos
    if(is_numeric($id) && strlen($nombre)> 0 && strlen($apellido)> 0 && strlen($posicion)> 0 && is_numeric($telefono)){

        if(insertarJugador($id,$nombre,$apellido,$posicion,$telefono)){
            
            echo "<br>Se ha insertado correctamente su información";

        }
        else{
            echo "Error ";
        }
    }
    else
    echo "Error";

}

if(isset($_POST["submit2"])){
    
    $_POST['nombre']=htmlspecialchars($_POST['nombre']);
    
    $nombre = $_POST["nombre"];

    if(deleteDB($nombre)){
        
        echo "Dato borrado exitosamente";
    }
    else{
        echo "No existe ningun jugador con ese nombre";
    }
}


if(isset($_POST["submit3"])){
      
    $_POST['nombre_original']=htmlspecialchars($_POST['nombre_original']); //nombre original
    $_POST['nombre']=htmlspecialchars($_POST['nombre']); //nombre nuevo
    $_POST['id']=htmlspecialchars($_POST['id']);
    $_POST['telefono']=htmlspecialchars($_POST['telefono']);
    //$_POST['apellido']=htmlspecialchars($_POST['apellido']);
    
    $nombreO = $_POST["nombre_original"];
    $nombre= $_POST["nombre"];
    //$apellido= $_POST["apellido"];
    $id = $_POST["id"];
    $telefono = $_POST["telefono"];

    //validar datos
    if(strlen($nombreO)> 0 && strlen($id)> 0 && strlen($telefono)> 0 && strlen($nombre)> 0 && is_numeric($id) && is_numeric($telefono)){

        if(updateDB($nombreO,$nombre,$id,$telefono)){
            
            echo "<br>Se actualizo correctamente la información";
    
        }
        else{
            echo "Error en la subida a la base de datos";
        }
    
    
    }else
        
    echo "Error al validar datos";   
}

include("_index.html");
include("_footer.html");


?>