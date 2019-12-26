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
    $v = array(3, 5, 8, 2);
    print_r($v);

    sort($v);
    print_r($v);
    echo "<br>Ordenado de forma reversa<br>";
    rsort($v);
    print_r($v);

    echo "<br>Ordenado mantendo a associabilidade dos indices<br>";
    asort($v);
    print_r($v);

    echo "<br>Ordenado mantendo a associabilidade dos indeces de forma Reversa<br>";
    arsort($v);
    print_r($v);


    ?>
        </pre>
</div>
</body>
</html>
