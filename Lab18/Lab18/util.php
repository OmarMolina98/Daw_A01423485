<?php

function DB(){
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="futbol";
    $con = mysqli_connect($servername,$username, $password, $dbname);

    if(!$con){
        
        die("Connection Failed: " . mysqli_connect_error());

    }
    return $con;
}

function closeDB($mysql){
    
    mysqli_close($mysql);
    
}

function getNombre(){

    $con = DB();
   
    $sql = "SELECT id, nombre, apellido, posicion, telefono FROM jugadores";
    
    $result = mysqli_query($con, $sql);
    
    closeDB($con);
    
    return $result;

}

function insertarJugador($id, $nombre, $apellido, $posicion, $telefono){
    
    $con = DB();
    
    $sql = "INSERT INTO jugadores (id, nombre, apellido, posicion, telefono) VALUES (\"".$id ."\",\"". $nombre ."\",\"".$apellido ."\",\"".$posicion ."\",\"".$telefono ."\");";;

    if(mysqli_query($con, $sql)){
        
        echo "Nuevo dato ingresado correctamente";
        closeDB($con);
        return true;
    }
    else{
        echo "Error : " . $sql ." ". mysqli_error($con);
        closeDB($con);
        return false;
    }
    closeDB($con);

}


function deleteDB($nombre){
    
    $con = DB();
    
    $sql = "DELETE FROM jugadores WHERE nombre = '".$nombre."'";

    $result = mysqli_query($con, $sql);
    
    closeDB($con);
    
    return $result;

}

function updateDB($nombre,$nombreN, $id, $telefono){
    
    $con = DB();
    
    $sql = "UPDATE jugadores SET nombre ='$nombreN', id=$id, telefono=$telefono WHERE nombre = '$nombre'";
    
    if(mysqli_query($con, $sql)){
        
        echo "Nuevo dato ingresado correctamente";
        
        closeDB($con);
        
        return true;
    }else{
        
        echo "Error : " . $sql ." ". mysqli_error($con);
        closeDB($con);
        return false;
    }
    closeDB($con);
}


?>


