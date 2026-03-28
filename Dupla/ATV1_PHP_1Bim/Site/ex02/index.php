<?php
/*
Data: 02/03/2026
Autor: 
Objetivo: Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius. Depois, o programa deve converter para a outra unidade.
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 02</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h2> Conversor de Temperatura</h2>
        <form method="POST">
            <input type="number" name="valor" step="0.1" placeholder="Valor" required>
            <select name="tipo">
                <option value="C">Celsius para Fahrenheit</option>
                <option value="F">Fahrenheit para Celsius</option>
            </select>
            <button type="submit">Converter</button>
        </form>
        <?php
        if ($_POST) {
            $v = $_POST['valor'];
            if ($_POST['tipo'] == "C") {
                $res = ($v * 9/5) + 32;
                echo "<div class='result'>$v °C = " . round($res, 2) . " °F</div>";
            } else {
                $res = 5/9 * ($v - 32);
                echo "<div class='result'>$v °F = " . round($res, 2) . " °C</div>";
            }
        }
        ?>
        <a href="../Home.php" class="btn-home">Voltar para Home</a>
    </div>
</body>
</html>