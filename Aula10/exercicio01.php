
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $n = $_GET["num"];
        $op =  $_GET["oper"];
        switch ($op){
            case 1:
                $r = $n*2;
                $oper = "Dobro";
                break;
            case 2:
                $r = pow($n,3);
                $oper = "Cubo";
                break;
            case 3:
                $oper = "Raiz Quadrada";
                $r = sqrt($n);
                break;
        }

        echo "$oper de <span class='foco'>$n</span> &eacute; <span class='foco'>$r</span>";

    ?>
</div>
</body>
</html>
