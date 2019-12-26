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
        /*
         * INCLUDE: INCLUI UMA BIBLIOTECA
         * REQUIRE: EH OBRIGATORIO O ARQUIVO EXISTIR
         *  ONCE: INCLUI O ARQUIVO SE ELE NAO FOI CARREGADO AINDA
    */
        include_once "funcao.php";

        ola();
        mostraValor(3);
    ?>
</div>
</body>
</html>
