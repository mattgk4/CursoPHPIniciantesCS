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
        echo "Contando pra frente <br>";
        $c = 1;
        do {
           echo " $c ";
           $c++;
        } while($c<=10);

        echo "<br>Contando pra tr&aacute;s <br>";
        $c = 10;
        do {
           echo " $c ";
           $c--;
        } while($c>=1);
    ?>
</div>
</body>
</html>
