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
    //Para ignorar o case sensitive
    echo $pos."<br>";
    $frase = "Estou apredendo PHP";
    $pos = stripos($frase,"php");
    echo $frase."<br>";
    echo $pos."<br>";
    ?>
</div>
</body>
</html>
