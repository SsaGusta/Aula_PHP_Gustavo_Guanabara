<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php
            $num = $_POST['numero'] ?? 0;
            echo "<p>O número escolhido foi <strong>". number_format($num,3,",",".") . "</strong> </p>";
            
            $int = (int)$num ;
            $fracionaria = $num - $int ;
            
            echo "<ul><li>A parte inteira do número é <strong>". number_format($int, 0, ",","0") . "</strong></li>";
            echo "<li>A parte fracionária do número é <strong>". number_format($fracionaria, 3, ",",".") . "</strong></li></ul>";
            

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>