<?php
/*
Data: 02/03/2026
Autor: 
Objetivo: Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/"). O programa deve mostrar o resultado da operação.
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 03</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h2> Calculadora</h2>
        <form method="POST">
            <input type="number" name="n1" placeholder="N1" required>
            <select name="op">
                <option>+</option><option>-</option><option>*</option><option>/</option>
            </select>
            <input type="number" name="n2" placeholder="N2" required>
            <button type="submit">Calcular</button>
        </form>
        <?php
        if ($_POST) {
            $n1 = $_POST['n1']; $n2 = $_POST['n2']; $op = $_POST['op'];
            $res = match($op) {
                '+' => $n1 + $n2,
                '-' => $n1 - $n2,
                '*' => $n1 * $n2,
                '/' => ($n2 != 0 ? $n1 / $n2 : "Erro: Divisão por zero"),
                default => "Operação inválida"
            };
            echo "<div class='result'>Resultado: $res</div>";
        }
        ?>
        <a href="../Home.php" class="btn-home">Voltar para Home</a>
    </div>
</body>
</html>