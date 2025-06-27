<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<main>
    <h1>Somador de valores</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

        <label for="v1">Valor 1:</label>
        <input type="number" name="val1" id="val1" value="<?=$val1?>"> <br><br>

        <label for="v2">Valor2:</label>
        <input type="number" name="val2" id="val2" value="<?=$val2?>"> <br><br>

        <input type="submit" value="Somar">
    </form>
</main>

<section id="resultado">
    <h2>Resultado da Soma</h2>

    <?php 
    $soma = $val1 + $val2;
    echo "<p>A soma do $val1 e $val2 é igual a $soma</p>";
    ?>

</section>

<?php 
    $val1 = $_GET['val1'] ?? 0;
    $val2 = $_GET['val2'] ?? 0;
?>
    
</body>
</html>