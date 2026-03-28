<?php
/*
Data: 02/03/2026
Autor: 
Objetivo: Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores:
Um vetor com números positivos
Um vetor com números negativos
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 07 - Vetores</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h2> Separador de Positivos e Negativos</h2>
        
        <form method="POST">
            <p>Digite 8 números inteiros separados por vírgula:</p>
            <input type="text" name="numeros" placeholder="Ex: 10, -5, 3, -2, 8, -1, 0, 4" required>
            <button type="submit">Separar Vetores</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = explode(",", $_POST['numeros']);
            $dados = array_map('trim', $input);
            $dados = array_map('intval', $dados);

            $positivos = [];
            $negativos = [];

            foreach ($dados as $n) {
                if ($n >= 0) {
                    $positivos[] = $n;
                } else {
                    $negativos[] = $n;
                }
            }

            echo "<div class='result'>";
            echo "<strong>Vetor Original:</strong> " . implode(", ", $dados) . "<br><br>";
            
            echo "<span style='color: #27ae60;'><strong>Positivos:</strong></span> ";
            echo count($positivos) > 0 ? implode(", ", $positivos) : "Nenhum";
            
            echo "<br><br>";
            
            echo "<span style='color: #e74c3c;'><strong>Negativos:</strong></span> ";
            echo count($negativos) > 0 ? implode(", ", $negativos) : "Nenhum";
            echo "</div>";
        }
        ?>

        <a href="../Home.php" class="btn-home">Voltar para Home</a>
    </div>
</body>
</html>