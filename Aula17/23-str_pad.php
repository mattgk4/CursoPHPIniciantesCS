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
        $nome = "Mateus";
        $novo = str_pad($nome, 30, "#", STR_PAD_BOTH);
        print("Eu sou o $novo e sou lindo!");
        $nome = "Mateus";
        $novo = str_pad($nome, 30, "#", STR_PAD_LEFT);
        print("Eu sou o $novo e sou lindo!");
        $nome = "Mateus";
        $novo = str_pad($nome, 30, "#", STR_PAD_RIGHT);
        print("Eu sou o $novo e sou lindo!");
        ?>
</div>
</body>
</html>
