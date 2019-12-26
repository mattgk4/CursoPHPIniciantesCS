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
        function soma(){
            $tot = func_num_args();
            $s = 0;
            print "Os valores s&atilde;o: <br>";
            for ($i = 0;$i<$tot;$i++){
                print ($i+1)."º &eacute;  ".func_get_arg($i)."<br>";
                $s += func_get_arg($i);
            }
            return $s;
        }
        
        $a = soma(3,10,3, 56, 100, 50);

        echo "<p>A soma dos valores vale <span class='focoBlue'> $a</span></p>";

    ?>
</div>
</body>
</html>
