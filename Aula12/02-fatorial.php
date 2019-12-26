<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../Aula14/_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $val = $_GET["val"];
        $fat = 1;
        echo "<span class='focoBlue'>$val!</span> = ";
        do {
            $fat *= $val;
            $val--;
        }while ($val >=1);
        echo "<span class='focoRed'>$fat</span>";
    ?>
</div>
</body>
</html>
