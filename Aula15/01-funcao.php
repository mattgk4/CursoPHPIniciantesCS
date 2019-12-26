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
        function teste($x){
            $x += 2;
            echo "O valor de X &eacute; ".$x;
    }

    $a = 3;
    teste($a);
    print "<br>O valor de A &eacute; ".$a;
    ?>
</div>
</body>
</html>
