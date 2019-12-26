<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../Aula10/_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        b {
           color: #7e050c;
        }
    </style>
</head>
<body>
<div>

    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $m = ($n1+$n2)/2;
        // Entre 0 e 5 reprovado; De 5 a 7 em recuperacao; e maior que 7 aprovado
        if ($m < 5){
            $sit = "REPROVADO";
        }elseif ($m>=5 && $m<7){
            $sit = "RECUPERAÇ&Atilde;O";
        }else{
            $sit = "APROVADO";
        }

        echo "Com suas notas <b>".number_format($n1, 1)."</b> e <b>".number_format($n2, 1)."</b> e sua m&eacute;dia &eacute; <b>".number_format($m, 1)."</b><br/>";
        echo "A sua situaç&atilde;o &eacute; <b>$sit</b><br/>";
    ?>
    <a href="desafio.html"><button type="button">Voltar</button> </a>
</div>
</body>
</html>
 