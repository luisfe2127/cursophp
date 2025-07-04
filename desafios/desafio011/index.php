<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
</head>
<body>

<section>
    <h1>Converta os segundos em minutos, horas, dias e semanas:</h1>

    <form action="index.php" method="get">
        <input type="number" name="number" id="inumber">
        <input type="submit" value="Calcular">
    </form>
</section>

<?php 
    $n = $_GET["number"] ?? 0;

    $m = $n / 60;

    $h =  $n / 3600;

    $d = $n / 86400;

    $s = $n / 604800;

    echo "O valor " . number_format($n, 0, ",", ".") . " se equivalem a " . number_format($m, 0, ",", ".") . " minutos, " . number_format($h, 0, ",", ".") . " horas, " . number_format($d, 0, ",", ".") . " dias e " . number_format($s, 0, ",", ".") . " semanas.";
?>
    
</body>
</html>