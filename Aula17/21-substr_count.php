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
        $frase = "Estou apredendo PHP no Curso em Video de PHP";
        $vezes = substr_count($frase,"PHP");
        echo "Na frase <strong>$frase</strong>, a palavra PHP aparece<br>";
        echo $vezes."<br>";
    ?>
</div>
</body>
</html>
