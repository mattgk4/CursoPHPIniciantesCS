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
        $txt = "Este texto tem que ter um tamanho grande para se poder testar a o recurso wordwrap do php que vi no Curso em Video do professor Gustavo Guanabara";
        $r = wordwrap($txt,10, "<br/>\n", true);

        echo $r;
    ?>
</div>
</body>
</html>
