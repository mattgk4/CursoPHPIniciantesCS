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
        $nome = "   Mateus Pacheco   ";
        echo (strlen($nome));
        $novo = trim($nome);
        echo "<br/>".$novo;
        echo "<br/>".(strlen($novo))
    ?>
</div>
</body>
</html>
