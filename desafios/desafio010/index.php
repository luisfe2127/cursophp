<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando idade</title>
</head>
<body>

<h1>Calculando idade</h1>
<section id="formulario">

<form action="index.php" method="get">
    <label for="v1">Ano que pretende ver sua idade: </label> <input type="number" name="v1" id="v1"> <br>
    <label for="v2">Ano que você nasceu: </label> <input type="number" name="v2" id="v2"> <br><br>

    <input type="submit" value="Enviar">
</form>
</section>

<?php 
    $v1 = $_GET["v1"] ?? 0;
    $v2 = $_GET["v2"] ?? 0;

    $resultado = $v1 - $v2;

    echo "Se você nascer em $v1, você terá $resultado";
?>
    
</body>
</html>