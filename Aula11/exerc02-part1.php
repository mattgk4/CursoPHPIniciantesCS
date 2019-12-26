<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="exerc02-part2.php">
        <?php
        $c = 1;
        while($c <= 5){
            echo "Valor $c: <input type='number' name='v$c' required min='0' max='100'/><br>\n";
            $c++;
        }
        ?>
        <button type="submit" class="css3button">Analisar</button>
    </form>

</div>
</body>
</html>
