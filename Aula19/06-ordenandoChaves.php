<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
    $v = array(
        3 => "C",
        2 => "E",
        5 => "H",
        0 => "B"
    );
    print_r($v);

    echo "<br> Ordenando as chaves<br>";
    ksort($v);
    print_r($v);

    echo "<br> Ordenando as chaves reversa<br>";
    krsort($v);
    print_r($v);


    ?>
        </pre>
</div>
</body>
</html>
