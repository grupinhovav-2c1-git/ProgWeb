<?php
/*
Data: 02/03/2026
Autor: Nome dos alunos
Objetivo: Exercício 5 - Somatório de Fatoriais
Leia 5 números inteiros e mostre a soma dos fatoriais desses números.
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 05</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h2> Somatório de Fatoriais</h2>
        <form method="POST">
            <p>Digite 5 números separados por vírgula:</p>
            <input type="text" name="lista" placeholder="Ex: 3, 4, 2, 5, 1" required>
            <button type="submit">Calcular Soma dos Fatoriais</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            function fatorial($num) {
                $f = 1;
                for ($i = $num; $i > 1; $i--) $f *= $i;
                return $f;
            }

            $input = explode(",", $_POST['lista']);
            $numeros = array_map('trim', $input);
            $somaTotal = 0;

            echo "<div class='result'>";
            // Pegamos apenas os primeiros 5 números caso o usuário digite mais
            for ($idx = 0; $idx < 5 && $idx < count($numeros); $idx++) {
                $n = intval($numeros[$idx]);
                $fat = fatorial($n);
                echo "Fatorial de $n = <strong>$fat</strong><br>";
                $somaTotal += $fat;
            }
            echo "<br><strong>Soma Total: $somaTotal</strong>";
            echo "</div>";
        }
        ?>
        <a href="../Home.php" class="btn-home"> Voltar para Home</a>
    </div>
</body>
</html>