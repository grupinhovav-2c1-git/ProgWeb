<?php
/*
Data: 02/03/2026
Autor: Rhael Machado Meireles e Ricardo de Godoy Ribeiro Junior
Objetivo: Exercício 1 - Intervalo entre 100 e 200
Faça um programa que receba um número e diga se este número está no intervalo entre 100 e 200.
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 01</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h2> Verificador de Intervalo</h2>
        <form method="POST">
            <input type="number" name="num" placeholder="Digite um número" required>
            <button type="submit">Verificar</button>
        </form>
        <?php
        if ($_POST) {
            $n = $_POST['num'];
            $msg = ($n >= 100 && $n <= 200) ? "O número $n ESTÁ entre 100 e 200." : "O número $n NÃO está no intervalo.";
            echo "<div class='result'>$msg</div>";
        }
        ?>
       <a href="../Home.php" class="btn-home">Voltar para Home</a>
    </div>
</body>
</html>