<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<section>
    <h1>Anatomia de uma divisao</h1>

    
        <form action="index.php" method="get">
            <label for="val01">Digite o dividendo</label> <input type="number" name="val01" id="val01">
            <label for="val02">Digite o divisor</label> <input type="number" name="val02" id="val02">
            <input type="submit" value="Enviar">
        </form>
    
</section>

<?php 
    $dividendo = $_GET["val01"];
    $divisor = $_GET["val02"];

    $resto = $dividendo % $divisor;
    $divisao = $dividendo / $divisor;

    echo $dividendo . "|" . $divisor . "</br>";
    echo $resto $divisao;
?>
    
</body>
</html>