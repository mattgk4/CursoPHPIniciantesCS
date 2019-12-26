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
            return $s;
        }

        $a = soma(3,4);
        $b = soma(3,7);
        $y = 10;
        $x = 9;
        $c = soma($x,$y);

        echo "<p>a vale $a </p>";
        echo "<p>b vale $b</p>";
        echo "<p>c vale $c</p>";
    ?>
</div>
</body>
</html>
