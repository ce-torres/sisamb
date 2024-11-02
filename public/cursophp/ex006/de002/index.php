<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $sal1 = $_GET['sal1'] ?? 1_412.00;
        $sal2 = 1_412.00;
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal1">Salário (R$)"</label>
            <input type="number" name="sal1" id="idsal1" value="<?=$sal1?>" sep="0.00">
            <?="<p>Considerando o Salário mínimo <strong>de R$ 1.412,00.</strong></p>"?> 
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h1>Resultado Final</h1>
        <?php 
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $res1 = intdiv($sal1, $sal2);
            $res2 = $sal1 - ($sal2 * $res1);
            print "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $sal1, "BRL") . " ganha <strong> $res1 salários mínimos + " . numfmt_format_currency($padrao,$res2, "BRL") . ".</strong>"
        ?>
    </section>

    
</body>
</html>