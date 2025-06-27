<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
</head>
<body>

<h1>Calculando Raiz Quadrada e Cubica</h1>
<section id="formulario">
    
<form action="index.php" method="get">
    <label for="val01">Digite um valor: </label> <input type="number" name="val01" id="val01"> <br> <br>

    <input type="submit" value="Enviar">
</form>

</section>

<?php 
    $valor = $_GET["val01"] ?? 0;

    $raizQuadrada = sqrt($valor);
    $raizCubica = pow($valor, 1.0 / 3.0);

    echo "A raiz quadrada de $valor será " . number_format($raizQuadrada, 2, ",", ".") . " , e a raiz cubica, " . number_format($raizCubica, 2, ",", ".");
?>
    
</body>
</html>