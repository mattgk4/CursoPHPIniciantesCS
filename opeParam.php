<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Operadores Aritméticos em PHP</title>
    <style>
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
    <form align="center" action="opeParam.php" method="get">
        <label>Valor 1</label><br/>
        <input type="number" placeholder="Valor 1" name="x"/><br/>
        <label>Valor2</label><br/>
        <input type="number" placeholder="Valor 2" name="y"/><br/>
        <button type="submit" value="Enviar">Enviar</button>
    </form>
</div>
<h2 align="center" style="margin-top: 20px;">Operadores aritméticos<br>com recebimento de parâmetros</h2>
<div>
<?php
    $n1 = $_GET["x"];
    $n2 = $_GET["y"];
    echo "<h3 align='center'>Valores recebido $n1 e $n2</h3>";
    echo "<h3 align='center'>Valores absoluto de $n1 é ".abs($n1)."</h3>";
    echo "<h3 align='center'>Valores absoluto de $n2 é ".abs($n2)."</h3>";
    echo "<h3 align='center'>O valor de $n1<sup>$n2</sup> é ".pow($n1,$n2)."</h3>";
    echo "<h3 align='center'>A raiz de $n1 é ".sqrt($n1)."</h3>";
    echo "<h3 align='center'>O valor arrendodando de $n1 é ".round($n1)."</h3>"; // ceil floor
    echo "<h3 align='center'>A parte inteira de $n1 é ".intval($n1)."</h3>"; // Parte inteira
    echo "<h3 align='center'>O valor de $n1 em moeda é R$ ".number_format($n1,2, ",",".")."</h3>"; //Formatação Numérica
    $s = $n1 + $n2;
    echo "<h3 align='center'>Soma $n1+$n2 = $s</h3>";
    $m = $n1 - $n2;
    echo "<h3 align='center'>Subtração $n1-$n2 = $m</h3>";
    $p = $n1 * $n2;
    echo "<h3 align='center'>Produto $n1*$n2 = $p</h3>";
    $d = $n1 / $n2;
    echo "<h3 align='center'>Divisão $n1/$n2 = $d</h3>";
?>
</div>
</body>
</html>
