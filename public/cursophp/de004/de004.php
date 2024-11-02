<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            // cotacao vinda da api do banco do brasil

            // $incio = date("m-d-Y", strtotime("-7 days"));
            // $fim   = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'10-02-2024\'&@dataFinalCotacao=\'10-09-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
        
            // var_dump($dados);
        
            $cotacao = $dados["value"][0]["cotacaoCompra"];
        

            $valor = $_GET["valor"] ?? "Valor inexistente";
            $valor_Convertido = $_GET["valor"] / 5.22;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

          //  echo "Seus R$ $valor equivalem a US$ $valor_Convertido";
          //  echo "Cotação fixa de R$ 5,22 informada diretamente no código."
            echo "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") . "
                 equivalem a ". numfmt_format_currency($padrao, $valor_Convertido, "USD") . "</p>";
        ?>    
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button> 
        
    </main>

    
</body>
</html>