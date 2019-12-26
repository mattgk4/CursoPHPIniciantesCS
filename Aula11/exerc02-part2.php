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
        $i = 1;
        while ($i < 6){
            $v = "num".$i;
            $url = "v".$i;
            $$v = $_GET[$url];
            $i++;
        }

        $i = 1;
        while ($i < 6){
            $v = "num".$i;
            echo "Valor $i : <span class='foco'>".$$v."</span><br/>";
            $i++;
        }
        ?>

    <button type="button" class="css3button">Voltar</button>
</div>
</body>
</html>
