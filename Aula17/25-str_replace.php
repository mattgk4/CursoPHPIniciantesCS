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
        $txt = "Gosto de estudar PHP.<br>";
        $novo = str_replace("PHP", "Fisica", $txt);
        echo $novo;
        $txt = "Gosto de estudar PHP.<br>";
        $novo = str_replace("PHp", "Fisica", $txt);
        echo $novo;
        $txt = "Gosto de estudar PHP.<br>";
        $novo = str_ireplace("PHp", "Fisica", $txt);
        echo $novo;
        ?>
</div>
</body>
</html>
