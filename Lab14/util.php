<?php

    function conectDB(){
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "futbol";

        $conexion = mysqli_connect("localhost","root","","futbol");

            if ($conexion==NULL) {

                die("No se pudo conectar con la base de datos");

            }
            
            return $conexion;
    }

    /////////////////////

    function closeDB($conexion){

        mysqli_close($conexion);

    }
    
    //////////////////////////


    function getJugadores(){
        
    $conn = conectDB();
    //var_dump($conn);    
        
        
    $sql= "SELECT id, nombre, apellido , posicion, telefono FROM jugadores";
        /*$sql = "SELECT * FROM `jugadores`";*/
        
    $resultado = mysqli_query($conn,$sql);
        
    closeDB($conn);
        
    return $resultado;
        
    }

    

    ///////////////////////////
    
    function getNombre($nombre_jugador){
        
    $conn = conectDB();
        
    $sql= "SELECT id, nombre, apellido , posicion, telefono FROM jugadores WHERE nombre LIKE '%".$nombre_jugador."%'";
        
    $resultado = mysqli_query($conn,$sql);
        
    closeDB($conn);
        
    return $resultado;
        
    }

    /////////////////////////////

    function getPosicion($apellido){
        
    $conn = conectDB();
        
    $sql= "SELECT  apellido, posicion  FROM jugadores WHERE apellido LIKE '%".$apellido."%'";
        
    $resultado = mysqli_query($conn,$sql);
        
    closeDB($conn);
        
    return $resultado;
        
    }
    
  


    

























    
        
    
        
    





?>