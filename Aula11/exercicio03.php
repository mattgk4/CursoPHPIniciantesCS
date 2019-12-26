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
        $i = $_GET["init"];
        $f = $_GET["fim"];
        $incre = $_GET['incre'];

        if ($i < $f){
            while($i <= $f){
                echo "$i ";
                $i += $incre;
            }
        } else {
            while($i >= $f){
                echo "$i ";
                $i -= $incre;
            }
        }

    ?>
    <br><a href="javascript:history.go(-1)"><button type="button" class="css3button">Voltar</button></a>
</div>
</body>
</html>
