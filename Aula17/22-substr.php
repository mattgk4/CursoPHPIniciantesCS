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
        $frase = "Curso em Video";
        $sub = substr($frase,0,5);
        print $sub."<br>";
        print substr($frase,6)."<br>";
        print substr($frase,-5)."<br>";
    ?>
</div>
</body>
</html>
