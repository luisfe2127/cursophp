<?php 

$inicio = date("m-d-y", strtotime("-7 days"));
$fim = date("m-d-Y");
 $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$incio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

 $dados = json_decode(file_get_contents($url), true);

 $cotaçao = $dados["value"][0]["cotacaoCompra"];

 echo "a cotaçao foi " . $cotaçao;
?>