<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>

        <?php 
            $cotacao = 5.30;
            $real = $_REQUEST["valor"] ?? 0;
            $dolar = $real / $cotacao;

            // echo "Se você tem R\$" . number_format($real,2,",",".") . " e a cotação do dólar é
            // R$" . number_format($cotacao,2,",",".") . ", você tem US\$" . number_format($dolar, 2,",",".");

            // Formatação de moedas com internacionalização

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . 
            numfmt_format_currency($padrao, $dolar, "USD") . "</p>"; 


        ?>

    </main>
    
</body>
</html>


