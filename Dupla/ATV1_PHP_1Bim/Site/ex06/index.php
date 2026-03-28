<?php
/*
Data: 02/03/2026
Autor: Nome dos alunos
Objetivo: Exercício 6 - Série de Fibonacci
Leia um número n e mostre os n primeiros termos da sequência de Fibonacci.
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 06</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h2> Sequência de Fibonacci</h2>
        <form method="POST">
            <p>Quantos termos (n) deseja visualizar?</p>
            <input type="number" name="n" min="1" max="50" placeholder="Ex: 12" required>
            <button type="submit">Gerar Sequência</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = intval($_POST['n']);
            
            echo "<div class='result'>";
            echo "<strong>Resultado para n = $n:</strong><br><br>";

            $anterior = 0;
            $atual = 1;

            if ($n >= 1) echo "$anterior ";
            if ($n >= 2) echo "$atual ";

            for ($i = 3; $i <= $n; $i++) {
                $proximo = $anterior + $atual;
                echo "$proximo ";
                $anterior = $atual;
                $atual = $proximo;
            }
            echo "</div>";
        }
        ?>
        <a href="../Home.php" class="btn-home"> Voltar para Home</a>
    </div>
</body>
</html>