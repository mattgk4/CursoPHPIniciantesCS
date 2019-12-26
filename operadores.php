<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Operadores Aritméticos em PHP</title>
</head>
<body>
<h2 align="center">Operadores aritméticos</h2>
<?php
    $n1 = 2;
    $n2 = 3;
    $s = $n1 + $n2;
    echo "<h3 align='center'>Soma $n1+$n2 = $s</h3>";
    $m = $n1 - $n2;
    echo "<h3 align='center'>Subtração $n1-$n2 = $m</h3>";
    $p = $n1 * $n2;
    echo "<h3 align='center'>Produto $n1*$n2 = $p</h3>";
    $d = $n1 / $n2;
    echo "<h3 align='center'>Divisão $n1/$n2 = $d</h3>";
?>
</body>
</html>
