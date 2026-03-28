<?php
/*
Data: 02/03/2026
Autor: 
Objetivo: Exercício 9 - Média Aritmética com Função
Crie uma função media($v) que receba uma lista de números reais e retorne a média aritmética.
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 09</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h2> Média de Notas</h2>
        <form method="POST">
            <p>Digite as notas separadas por vírgula (ex: 7, 8.5, 10):</p>
            <input type="text" name="lista" placeholder="7, 8, 9" required>
            <button type="submit">Calcular Média</button>
        </form>
        <?php
        function media($v) {
            return array_sum($v) / count($v);
        }

        if ($_POST) {
            $input = explode(",", $_POST['lista']);
            $notas = array_map('trim', $input);
            $notas = array_map('floatval', $notas);
            
            echo "<div class='result'>A média aritmética é: <strong>" . round(media($notas), 2) . "</strong></div>";
        }
        ?>
        <a href="../Home.php" class="btn-home">Voltar para Home</a>
    </div>
</body>
</html>