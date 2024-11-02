<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Antecessor e Sucessor</title>
</head>
<body>

            <h1>Resultado do Formulario</h1>
<section>
    <?php
            $number = $_GET["number"] ?? "Sem valor";
            $sucessor = $number + 1;
            $antecessor = $number - 1;
            echo "<p> O sucessor de $number é $sucessor, e o antecessor é $antecessor </p>";
    ?>
</section>

<a href="index.html">
    <p>voltar</p>
</a>
    
</body>
</html>