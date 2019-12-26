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
        $n = $_GET["num"];
        $div = 0;
        echo "Os divisores de $n s&atilde;o: ";
        for ($c = 1; $c <= $n; $c++){
            if($n%$c == 0){
                echo "<span class='focoBlue'>$c </span>";
                $div++;
            }
        }

        echo "<br>Totalizando <span class='focoOrange'> $div </span>divisores <br>";
        if($div > 2){
            echo "O n&uacute;mero <span class='focoRed'>N&Atilde;O &Eacute;PRIMO</span>";
        } else {
            echo "O n&uacute;mero <span class='focoGreen'>&Eacute; PRIMO</span>";
        }
    ?>
    <br> <a href="javascript:history.go(-1)"><button class="css3button">RETURN</button></a>
</div>
</body>
</html>
