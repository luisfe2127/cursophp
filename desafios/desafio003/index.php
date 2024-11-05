<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converçao</title>
</head>
<body>

<h1>Converta seu dinheiro real para dolar</h1>

<?php 
    $cotaçao = 5,87;

    $real = 1000;

    $dolar = $real / $cotaçao;

    // echo "R$". number_format($real, 2, ",", ".")." = US$". number_format($dolar, 2, ",", ".");

    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "R$". numfmt_fomart_currency($padrao, $real, "BRL") = US$ numfmt_fomart_currency($padrao, $dolar, "USD");

?>
    
</body>
</html>