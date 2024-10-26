<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h1>Resultado do Processamento</h1>

    <main>
        <?php 
        $n = $_GET["nome"] ?? "sem nome";
        $s = $_GET["sobrenome"] ?? "anonimo";

        echo "<p> seu nome é $n $s </p>";
        ?>
    </main>


</body>

</html>