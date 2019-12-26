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
    $v = array("K", "L", "M", "N", "O", "PII", 5);
    echo "O vetor tem ".count($v)." elementos.<br>";
    print_r($v);

    array_shift($v);
    array_unshift($v, 7); // Incluir o 7 no inicio do vetor

    echo "O vetor tem ".count($v)." elementos.<br>";
    print_r($v);
    ?>
        </pre>
</div>
</body>
</html>
