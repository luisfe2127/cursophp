<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converçao</title>
</head>
<body>

<h1>Converta seu dinheiro real para dolar</h1>

<form action="index.php" method="get">
    Digite o valor: <input type="number" name="real" id="real">
    <input type="submit" value="enviar">
</form>

<?php 
    $real = $_GET["real"] ?? "sem valor";
    $inicio = date("m-d-y", strtotime("-7 days"));
    $fim = date("m-d-Y");
     $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
     $dados = json_decode(file_get_contents($url), true);
    
     $cotaçao = $dados["value"][0]["cotacaoCompra"];
    
     echo "a cotaçao foi " . $cotaçao;

    $dolar = $real / $cotaçao;

    // echo "R$". number_format($real, 2, ",", ".")." = US$". number_format($dolar, 2, ",", ".");

    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo " Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");

?>
    
</body>
</html>