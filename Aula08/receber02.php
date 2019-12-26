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
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[sem nome]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";

        $idade = date("Y") - $ano;
        echo "$nome &eacute; $sexo e tem $idade.<br>";
    ?>
    <a href="formulario02.html"><button>Voltar</button></a>
</div>
</body>
</html>
 