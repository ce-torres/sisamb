<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06/08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 0;
        $reajuste = $_GET['reajuste'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de preço</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="idpreco" value="<?=$preco?>"  min="0.10" step="0.01">    

            <label for="reajuste">Qual o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="idreajuste" min="0" max="100" step="1" oninput="mudaValor()">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $valor = $preco + (($preco * $reajuste)*.01);
            print "<p>O produto que custava ". numfmt_format_currency($padrao, $preco, "BRL") . " , com " . number_format($reajuste,0,",",".") . " % de aumento vai passar a custar R$ , a partir de agora $valor.</p>";        
        ?>
    </section>
    <script>
        mudaValor();
        function mudaValor() {
            p.innerText = idreajuste.value;    
        }
    </script>
    
</body>
</html>