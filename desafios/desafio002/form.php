<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Numbers</title>
</head>
<body>

        <h1>Numeros Aleatorios</h1>

        <section>
        <p>Gere um valor Aleatorio clicando no botao</p>
    <form method="GET">
        <input type="submit" value="enviar" name="gerar">
    </form>
        </section>

        <section>
            <?php 
            if (isset($_GET["gerar"])) {
                $x = rand(0, 100);
                echo "<p>$x</p>";
            }
            ?>
        </section>
    
</body>
</html>