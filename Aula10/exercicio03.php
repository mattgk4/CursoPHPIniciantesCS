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
         $uf = $_GET["estado"];

         switch ($uf){
             case 'RS':
             case 'SC':
             case 'PR':
                 $reg = "Sul";
                 break;
             case 'SP':
             case 'RJ':
             case 'MG':
             case 'ES':
                $reg = "Sudeste";
                break;
             case 'BA':
             case 'AL':
             case 'PE':
             case 'SE':
             case 'RN':
             case 'CE':
             case 'PI':
             case 'MA':
             case 'PB':
                $reg = "Nordeste";
                break;
             case 'TO':
             case 'PA':
             case 'AM':
             case 'AP':
             case 'AC':
             case 'RR':
             case 'RO':
                 $reg = "Norte";
                 break;
             case 'MT':
             case 'MS':
             case 'GO':
             case 'DF':
                 $reg = "Centro-Oeste";
                 break;
         }

         echo "Voc&ecirc; mora na <span class='foco'>Regi&atilde;o $reg</span>"
    ?>
    <br/><button class="css3button"><a href="javascript:history.go(-1)">Voltar</a></button>
</div>
</body>
</html>
<!--<option value="AC">Acre</option>
<option value="AL">Alagoas</option>
<option value="AP">Amapá</option>
<option value="AM">Amazonas</option>
<option value="BA">Bahia</option>
<option value="CE">Ceará</option>
<option value="DF">Distrito Federal</option>
<option value="ES">Espírito Santo</option>
<option value="GO">Goiás</option>
<option value="MA">Maranhão</option>
<option value="MT">Mato Grosso</option>
<option value="MS">Mato Grosso do Sul</option>
<option value="MG">Minas Gerais</option>
<option value="PA">Pará</option>
<option value="PB">Paraíba</option>
<option value="PR">Paraná</option>
<option value="PE">Pernambuco</option>
<option value="PI">Piauí</option>
<option value="RJ">Rio de Janeiro</option>
<option value="RN">Rio Grande do Norte</option>
<option value="RS">Rio Grande do Sul</option>
<option value="RO">Rondônia</option>
<option value="RR">Roraima</option>
<option value="SC">Santa Catarina</option>
<option value="SP">São Paulo</option>
<option value="SE">Sergipe</option>
<option value="TO">Tocantins</option>-->