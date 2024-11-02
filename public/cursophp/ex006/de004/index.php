<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04/08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $val1 = $_GET['valor1'] ?? 0;
        $pes1 = $_GET['peso1'] ?? 0;
        $val2 = $_GET['valor2'] ?? 0;
        $pes2 = $_GET['peso2'] ?? 0;
    ?>
    <main>
        <h1>Médias Aritiméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" id="idvalor1" required value="<?=$val1?>">
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="idpeso1" required value="<?=$pes1?>">
            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" id="idvalor2" required value="<?=$val2?>">
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="idpeso" min="1" required value="<?=$pes2?>">
            <input type="submit" value="Calcular Médidas">
        </form>
    </main>
    <section>
        <h1> Cálculo das Médias</h1>
        <?php 
            $medias = ($val1 + $val2) / 2;
            $mediap = (($val1 * $pes1) + ($val2 * $pes2)) / ($pes1+$pes2) ;
            $padrao = numfmt_create("pt_BR", NumberFormatter::DECIMAL);
            print "<p>Analisando os valores " . $val1 . " e " . $val2 . ":</p>";
            print "<ul><li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a " . $medias . ".</li>";
            print "<li>A <strong>Média Aritimética Ponderada</strong> com os pesos " . $pes1 . " e " . $pes2 . " é igual a " . numfmt_format_currency($padrao,$mediap, "BRL") . ".</li></ul>";
        ?>
    </section>
    
</body>
</html>