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
            $cotacao = 5.17;
            $valor = $_GET["din"] ?? "Valor inexistente";
            $valor_Convertido = $_GET["din"] / 5.22;

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