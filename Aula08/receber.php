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
        $valor = $_GET["v"];
        $raiz = sqrt($valor);
        echo "A raiz quadrada de $valor &eacute; ".number_format($raiz,2);
    ?>
</div>
</body>
</html>
 