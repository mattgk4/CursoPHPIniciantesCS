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
       $d = $_GET["ds"];

       switch ($d){
           case 2:
           case 3:
           case 4:
           case 5:
           case 6:
               echo "Levanta e vai estudar!";
               break;
           case 7:
           case 8:
               echo "Karaca sem aula hoje";
       }
    ?>

    <br/><button class="css3button"><a href="javascript:history.go(-1)">Voltar</a></button>
</div>
</body>
</html>
