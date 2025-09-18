<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $num = $_REQUEST["num"] ?? 0;
                $ant = $num - 1;
                $suc = $num + 1;
                echo "<p>O número escolhido foi <strong>$num</strong></p>";
                echo "<p>Seu antecessor é <strong>$ant</strong> e seu sucessor é <strong>$suc</strong></p>";
            ?>
        </p>
        <button>&#x2B05;<a href="index.html">Voltar</a></button>
    </main>
</body>
</html>