<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $letra = "m";
        $cod = ord($letra);
        print "O codigo da letra $letra eh $cod";
        $letra = "M";
        $cod = ord($letra);
        print "<br/>O codigo da letra $letra eh $cod";


    ?>
</div>
</body>
</html>
