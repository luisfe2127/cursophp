<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritimetica</title>
</head>
<body>

<h1>Calculando Média e Mediana dos valores</h1>
<section id="formulario">
    <form action="index.php" method="get">
       <label for="v1">Primeiro Valor: </label> <input type="number" name="v1" id="v1"> <br>
       <label for="p1">Primeiro Peso: </label> <input type="number" name="p1" id="p1"> <br><br>

       <label for="v2">Segundo Valor: </label> <input type="number" name="v2" id="v2"> <br>
       <label for="p2">Segundo Peso:</label> <input type="number" name="p2" id="p2"> <br><br>

       <label for="v3">Terceiro Valor: </label> <input type="number" name="v3" id="v3"> <br>
       <label for="p3">Primeiro Peso: </label> <input type="number" name="p3" id="p3"> <br><br>

       <label for="v4">Quarto Valor: </label> <input type="number" name="v4" id="v4"> <br>
       <label for="p4">Quarto Peso:</label> <input type="number" name="p4" id="p4"> <br><br>

       <input type="submit" value="Enviar">
    </form>
</section>

<?php 
    $v1 = $_GET["v1"] ?? 0; $p1 = $_GET["p1"] ?? 0;
    $v2 = $_GET["v2"] ?? 0; $p2 = $_GET["p2"] ?? 0;
    $v3 = $_GET["v3"] ?? 0; $p3 = $_GET["p3"] ?? 0;
    $v4 = $_GET["v4"] ?? 0; $p4 = $_GET["p4"] ?? 0;

    //Media Aritimetica

    $mediaAritimetica = ($v1 + $v2 + $v3 + $v4) / 4;

    //Media Ponderada

    $somaPeso = $p1 + $p2 + $p3 + $p4;
    $mediaPonderada = ($p1 * $v1) + ($p2 * $v2) + ($p3 * $v3) + ($p4 * $v4) / $somaPeso;

    echo "<p> A média aritimetica simples é: $mediaAritimetica </p>";
    echo "<p> A média ponderada é: $mediaPonderada </p>";
?>
    
</body>
</html>