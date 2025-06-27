<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Globais</title>
</head>
<body>

    <form action="index.php?aluno=Jao&idade=18" method="post">


    </form>
     
         <?php
         echo "<h1>SuperGlobal COOKIE</h1>";
         
             setcookie("nome", "Gordofredo", time() + 3600);
             var_dump($_COOKIE);
         
             echo "<h1>SuperGlobal SESSION</h1>";
         
             session_start();
             $_SESSION["Teste"] = "Funcionou";
             var_dump($_SESSION);
         
             echo "<h1>SuperGlobal ENV</h1>";
         
             var_dump($_ENV);
         
             echo "<h1>SuperGlobal SERVER</h1>";
         
             var_dump($_SERVER);

             echo "<h1>SuperGlobal GLOBALS</h1>";

             var_dump($GLOBALS);
         ?>
     
    
</body>
</html>