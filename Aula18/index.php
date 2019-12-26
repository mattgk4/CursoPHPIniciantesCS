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
    $path = "../Aula18";
    $diretorio = dir($path);

    echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";

    while($arquivo = $diretorio -> read()){
        if ($arquivo[0] == "0" or $arquivo[0] == "1" or $arquivo[0] == "2"){
            echo "<a href='".$arquivo."'>".$arquivo."</a><br />";
        }
    }
    $diretorio -> close();

    ?>
</div>
</body>
</html>
