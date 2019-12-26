<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        $cad = array( "nome" => "Mateus",
                      "idade"=> 19,
                      "peso" => 55.5);
        $cad["fuma"] = false;
        print_r($cad);
        foreach ($cad as $campo => $valor){
            echo "O valor do $campo eh $valor<br>";
        }

        print($cad["nome"]);
    ?>
    </pre>
</div>
</body>
</html>
