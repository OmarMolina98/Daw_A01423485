<?php

    function conectDB(){
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "futbol";

        $conexion = mysqli_connect("localhost","root","","futbol");

            if ($conexion==NULL) {

                die("No se pudo conectar con la base de datos");

            }else{
                
                echo"Se pudo conectar a la base datos";
                
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

    ///////////////////////////insertar tabla

    
    function insertNombre($id, $nombre, $apellido, $posicion, $telefono){
        
        $bd = conectDB();
        
        $query='INSERT INTO jugadores(id, nombre, apellido , posicion, telefono) VALUES (?,?,?,?,?)';
        
             
        //Unir los parámetros de la función con los parámetros de la consulta   
        //El primer argumento de bind_param es el formato de cada parámetro
        
        if(!($statement = $bd->prepare($query))){
            
            die("Preparation failed: (" . $bd->errno . ") " . $bd->error);
            
        }
        
        //DATOS SEGUROS
        
        $id = $bd->real_escape_string($id);
        
        $nombre = $bd->real_escape_string($nombre); 
        
        $apellido = $bd->real_escape_string($apellido);
        
        $posicion = $bd->real_escape_string($posicion);
        
        $telefono = $bd->real_escape_string($telefono);
        
        if (!$statement->bind_param("sssss", $id, $nombre, $apellido, $posicion, $telefono)) {
            
            die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error); 
            
        }
         
        //Ejecutar la consulta
        
        if (!$statement->execute()){
            
            die("Execution failed: (" . $statement->errno . ") " . $statement->error);
            
        } 
        
        closeDb($bd);
    }
  
    
   function delete_nombre($delete_nombre){
       
        $conn=conectDb();
       
        $sql="DELETE FROM jugadores WHERE nombre='" . $delete_nombre . "'";
       
        $result=mysqli_query($conn,$sql);
       
        closeDb($conn);
       
        return $result;
       
    }
    //https://stackoverrun.com/es/q/128383

    ///////////////////////////////////////////////////////Editar



    function edit($id,$nombre,$apellido,$posicion,$telefono){
    
        $conexion = conectDB(); 
    
        $query = 'UPDATE jugadores SET nombre=(?),apellido=(?),posicion=(?), telefono=(?)  WHERE id_jugadores=(?)';
        
        $result=mysqli_query($conexion,$query);
    
        if ( !($statement = $conexion->prepare($query))) {
            
          die("Error: (" . $conexion->errno . ") " . $conexion->error);
        

        }
        
        if (!$statement->bind_param("sssss", $id ,$nombre,$apellido,$posicion,$telefono)) {
            
          die("Error en vincular: (" . $statement->errno . ") " . $statement->error);
           
            
        }
        if (!$statement->execute()) {
            
          die("Error al ejecución: (" . $statement->errno . ") " . $statement->error);
     
        }
        closeDB($conexion);
       
        return $result;
    
    
    }













































?>