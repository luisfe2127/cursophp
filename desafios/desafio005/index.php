<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero real</title>
</head>
<body>

    <h1>Analisador de numeros reais </h1>

    <section id="formulario">
       <form action="index.php" method="get">

           Digite um numero: <input type="number" name="number" id="number" step="0.001">

            <input type="submit" value="enviar">
       </form>

    </section>
    
    <?php 
    $n = $_GET["number"] ?? 0;

    echo "Valor escolhido pelo usuario " . number_format($n, 3, ",", ".") . "</br>";

    $int = (int) $n;
    $fra = $n - $int;

    echo "A parte inteira do valor é " . number_format($int, 0, ",", ".") . " e a fracionaria é " . number_format($fra, 3, ",", ".");

    ?>
</body>
</html>