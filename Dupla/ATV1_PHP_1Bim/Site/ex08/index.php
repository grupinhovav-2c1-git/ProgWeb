<?php
/*
Data: 02/03/2026
Autor: 
Objetivo: Exercício 8 - Soma de 0 até N com Função
Crie uma função soma(n) que receba um número inteiro e retorne a soma de 0 até esse número.
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 08</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h2> Soma Cumulativa</h2>
        <form method="POST">
            <input type="number" name="valor" placeholder="Somar até quanto?" required>
            <button type="submit">Calcular</button>
        </form>
        <?php
        function soma($n) {
            $total = 0;
            for ($i = 0; $i <= $n; $i++) $total += $i;
            return $total;
        }

        if ($_POST) {
            $v = $_POST['valor'];
            echo "<div class='result'>A soma de 0 até $v é: <strong>" . soma($v) . "</strong></div>";
        }
        ?>
        <a href="../Home.php" class="btn-home">Voltar para Home</a>
    </div>
</body>
</html>