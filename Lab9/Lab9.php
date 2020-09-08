<?php
 include("_header.html");
 echo"Ejercicio 1";
 echo"<br><br>";
 echo"Una función que reciba un arreglo de números y devuelva su promedio. ","<br>";
 echo"<br>";
 echo"Estos son los numeros para el promedio:";
 echo"<br>";
 echo promedio();
 
 function promedio(){
    
    $suma=0;
    $promedio=0;
    for($var=1;$var<=5;$var++){
        
        $d=rand(1,100);
        echo "<li>$d</li>";
        $suma+=$d; 
        $promedio=$suma/5;
        echo" ";
    }
    
    echo"<br>","El promedio es: ";
    return $promedio;
    echo"<br>";
 }

?>

<?php
 echo"<br><br><br>";
 echo"Ejercicio 2";
 echo"<br><br>";
 echo"Una función que reciba un arreglo de números y devuelva su mediana .","<br>";
 echo"<br>";
     $mediana1 = array(19,13,53,15,97,75);
     $mediana2 = array(65,25,85,21,52,87);

    function mediana($mediana) {
        sort($mediana);
        $mitad = sizeof($mediana)/2;
        if(sizeof($mediana) % 2 == 0) {
            return ($mediana[$mitad] + $mediana[$mitad-1])/2;
        }
        else {
            return $mediana[sizeof($mediana)/2];
        }
    }
    echo "<br>";
    echo "La mediana del primer arreglo es " , mediana($mediana1);
    echo "<br>";
    echo "La mediana del segundo arrelgo es " , mediana($mediana2);

?>

<?php

     echo"<br><br><br>";
     echo"Ejercicio 3","<br>";
     echo"<br><br>";
     echo"Una función que reciba un arreglo de números y muestre la lista de números, y como ítems de una lista html muestre el promedio, la media, y el arreglo ordenado de menor a mayor, y posteriormente de mayor a menor .","<br>";
     echo"<br>";
    
      $multiple3 = array(19,13,53,15,97,75);
      $multiple4 = array(65,25,85,21,52,87);

    function multiple($plenty) {
        
        $res=0;
        echo"Promedio:<br>";
        echo"<br>";
        $res=array_sum($plenty)/6;
        echo "<li>$res</li><br>";
        
        sort($plenty);
        $mitad = sizeof($plenty)/2;
        if(sizeof($plenty) % 2 == 0) {
             $total=($plenty[$mitad] + $plenty[$mitad-1])/2;
        }
        else 
             $total=($plenty[sizeof($plenty)/2]);
        
        echo"<br>";
        arsort($plenty);
        echo "Mediana: <br>";
        echo"<br>";
        echo"<li>",$total,"<br>";
        echo"<br>";
                
        sort($plenty);

        echo "De Menor a Mayor:";
        foreach($plenty as $num_may ){
          echo "<li>$num_may</li>" ;
        }
        
        echo"<br>";
        arsort($plenty);
        echo "<li>De Mayor a Menor: </li>";
        
        foreach($plenty as $numero){
          echo "<li>$numero</li>" ;
        }         
        
        echo"<br>";
   
    }
        multiple($multiple3);
        echo "<br><br>";
        multiple($multiple4);       
?>

<?php

     echo"<br><br><br>";
     echo"Ejercicio 4";
     echo"<br><br>";
     echo"Una función que imprima una tabla html, que muestre los cuadrados y cubos de 1 hasta un número n .","<br>";
     echo"<br>";

  function bases($bases){
        echo "<table>
            <tr>
              <th>n</th>
              <br>
              <th>n^2</th>
            </tr>";
      
        for($i=1; $i<=$bases; $i++){
           echo "<td>" . $i . "</td>";
           echo "<td>" .  pow($i,2) . "<tr></td>";
            
        }
        echo "</table>";
    }
    bases(6);
?>

<?php

     echo"<br><br><br>";
     echo"Ejercicio Libre";
     echo"<br><br>";
     echo"Escoge algún problema que hayas implementado en otro lenguaje de programación, y dale una solución en php, en una vista agradable para el usuario.  .","<br>";
     echo"<br>";

    echo"Cambiar de dolares a pesos";
    
    $dolares = array(254,178,652,4781,175);

    function currency($dor){
        
    
        echo"<br>";
        echo"<br>Dolares:<br>";
    
        foreach($dor as $num_may ){
        
          echo "<li>", "$",$num_may ;
            
        }
        
        echo"<br>";
        echo"<br>";
        foreach($dor as $num_may2 ){
        
          echo "<li>Pesos mexicanos:",$num_may2*19,"<br>" ;
            
        }
        
    }
    currency($dolares);

     include("_body.html");
?>


<?php

 include("_footer.html");




?>








