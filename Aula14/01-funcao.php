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
        function soma($a, $b){
            $s = $a+$b;
            echo "<p>A soma &eacute; ".$s."</p>";
        }

        soma(3,4);
        soma(3,7);
        $y = 10;
        $x = 9;
        soma($x,$y);
    ?>
</div>
</body>
</html>
