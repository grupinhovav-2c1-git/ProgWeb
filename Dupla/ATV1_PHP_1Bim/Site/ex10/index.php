<?php
/*
Data: 02/03/2026
Autor: 
Objetivo: Exercício 10 - Ano Bissexto
Leia um ano e informe se ele é bissexto.
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 10</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h2> Verificador de Ano Bissexto</h2>
        <form method="POST">
            <input type="number" name="ano" placeholder="Digite o ano (ex: 2024)" required>
            <button type="submit">Verificar</button>
        </form>
        <?php
        if ($_POST) {
            $ano = $_POST['ano'];
            $bissexto = ($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0);
            
            echo "<div class='result'>";
            if ($bissexto) {
                echo "O ano <strong>$ano</strong> é Bissexto!";
            } else {
                echo "O ano <strong>$ano</strong> NÃO é Bissexto.";
            }
            echo "</div>";
        }
        ?>
        <a href="../Home.php" class="btn-home">Voltar para Home</a>
    </div>
</body>
</html>