<?php
    require_once("util.php");
    include("_header.html");
    include("_eliminar.html");
    
    echo "<div class=\"container\">";

    $nombre=$_POST["nombre"];

    
    if (isset($_POST["nombre"])) {

            delete_nombre($nombre);
            echo '<script language="javascript">';
            echo 'alert("Se borró nombre")';
            echo '</script>';

        }else{
            echo '<script language="javascript">';
            echo 'alert("Llena los campos por favor")';
            echo '</script>';
        }

      echo "</div>";
    
    include("_footer.html");
?>