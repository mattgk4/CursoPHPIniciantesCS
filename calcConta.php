<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Calculando desconto e aumento</title>
    <style>
        label{
            color: darkblue;
            font-family: "Andale Mono";
            padding-top: 10px;
        }
        h3{
            color: darkblue;
            font-family: "Andale Mono";
        }
        div{
            margin: 10px 100px 20px 100px;
            border: brown;
            border-style: solid;
            background: #DDDDDD;
        }
    </style>
</head>
<body>
<h2 align="center" style="margin-top: 20px;">Entre com os valores</h2>
<div>
    <form align="center" action="calcConta.php" method="get">
        <label><b>Capital:</b></label><br/>
        <input type="number" placeholder="Capital" name="x"/><br/>
        <label><b>Valor do desconto em porcentagem:</b></label><br/>
        <input type="number" placeholder="desconto" name="y"/><br/>
        <button type="submit" value="Enviar">Enviar</button>
    </form>
</div>
<h2 align="center" style="margin-top: 20px;">Resultado</h2>
<div>
    <?php
    $capital = $_GET["x"];
    $desconto = $_GET["y"];

    $montante = $capital*(1-$desconto/100);
    echo "<h3 align='center'>O valor do capital &eacute; R$ ".number_format($capital, 2,",", ".")."</h3>";
    echo "<h3 align='center'>Esse capital com $desconto % de desconto &eacute; R$ ".number_format($montante, 2,",", ".").".</h3>";


    ?>
</div>
</body>
</html>