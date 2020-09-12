<?php
include("problema.php");
?>

<html>
<?php include("_header.html"); ?><hr>

    <body>
    <section>
        <article>
            <?= "       
                    <p>Name: ".$name."</p>
                    <p>Apellido: ".$apellido."</p>
                    <p>E_mail: ".$email."</p>
                    <p>Teléfono: ".$telefono."</p>
                    <p>".$error."</p>"
            ?>
        </article>
    </section>
<hr>

<?php
    include("_preguntas.html");
    include("_footer.html")
?>
</body>
</html>