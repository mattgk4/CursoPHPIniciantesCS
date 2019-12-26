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
        $c = array( 3=> 5,
                    1=> 4,
                    5=> 89,
                    8=> 'Mi');
        $c[] = 3;
        unset($c[1]);
        print_r($c);
    ?>
    </pre>
</div>
</body>
</html>
