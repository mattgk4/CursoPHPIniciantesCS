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
        $num = 1;
        echo "<p>TABUADA DO N&Uacute;MERO <span class='focoGreen'>$num</span> </p>";

        do {
            echo "<span class='focoGreen'>$val</span> <span class='focoOrange'> x </span><span class='focoBlue'>$num</span> = <span class='focoRed'>".$num*$val."</span> </p>";
            $num++;
        } while ($num < 11)
    ?>

   <a href="javascript:history.go(-1)"><button class="css3button">Voltar</button></a>
</div>
</body>
</html>
