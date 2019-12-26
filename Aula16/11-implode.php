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
        $vetor[0] = "Mateus";
        $vetor[1] = "Pacheco";
        $vetor[2] = "Uchoa";

        $nome = implode(" ",$vetor);

        echo $nome;
    ?>
</div>
</body>
</html>
