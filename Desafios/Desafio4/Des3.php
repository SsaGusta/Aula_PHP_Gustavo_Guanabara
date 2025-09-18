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
                $inicio = date("m-d-Y", strtotime("-7 days"));
                 $fim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                $dados = json_decode(file_get_contents($url), true);

                $cotacao = $dados["value"][0]["cotacaoCompra"];
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


