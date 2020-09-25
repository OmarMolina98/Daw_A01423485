<?php
    session_start();

    include("partials/_header2.html");

    $files = glob("uploads/*");

    foreach($files as $img){
        
        echo "<img class=\"responsive-img\" width=\"500em\" src=".$img.">";
        echo "<br>";
    }

    include("partials/_footer.html"); 
?>