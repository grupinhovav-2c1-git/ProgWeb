<?php
/*
Data: 02/03/2026
Autor: Nome dos alunos
Objetivo: Exercício 4 - Triângulo Numérico
Leia um número n e imprima n linhas no seguinte formato (exemplo para n = 6):
1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
1 2 3 4 5 6
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 04 - Triângulo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h2>Gerador de Triângulo Numérico</h2>
        
        <form method="POST">
            <p>Digite o número de linhas (n):</p>
            <input type="number" name="n" min="1" max="50" placeholder="Ex: 6" required>
            <button type="submit">Gerar Triângulo</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = intval($_POST['n']);
            
            echo "<div class='result' style='font-family: monospace; line-height: 1.5;'>";
            echo "<strong>Resultado para n = $n:</strong><br><br>";
            for ($i = 1; $i <= $n; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "$j ";
                }
                echo "<br>";
            }
            echo "</div>";
        }
        ?>

        <a href="../Home.php" class="btn-home">Voltar para Home</a>
    </div>
</body>
</html>