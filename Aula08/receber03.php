<!DOCTYPE html>
<html>
<head>
    <?php
    $txt = isset($_GET["t"])?$_GET["t"]:"Texto Gen&eacute;rico.";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#0000000";

    echo "<style>
        .texto{
            color: $cor;
            font-size: $tam;
        }
    </style>"
    ?>

  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Mostrando texto</title>
</head>
<body>
<div>
    <?php
        echo "<span class='texto'>$txt</span>";
    ?>
    <br/><a href="formulario03.html"><button>Voltar</button></a>
</div>
</body>
</html>
 