<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../Aula10/_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

    <?php
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y")-$a;

        if($i < 16){
            $tipoVoto = "n&atilde;o vota";
        } elseif (($i >= 16 && $i < 18)|| ($i > 65)){
            $tipoVoto = "voto opcional";
        } else {
            $tipoVoto = "voto obrigat&oacute;io";
        }
        echo "Voc&ecirc; t&ecirc;m $i anos de idade.<br/>";
        echo "Com essa idade seu tipo de voto &eacute;: $tipoVoto.";
    ?>
</div>
</body>
</html>
 