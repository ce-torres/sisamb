<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03/08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET['num'] ?? 1;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="idnum" value="<?=$num?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <?php 
            $raiz = sqrt($num);
            $rcub = $num ** (1/3);
            print "<p>Analisando o número" . $num .", temos:</p>"; 
            echo "<ul><li>A sua raiz quadrada é " . number_format($raiz,2,",",".") . ".</li>";
            echo "<li>A sua raiz cubica é " . number_format($rcub,2,",",".") ."</li></ul>";
        ?>    
        
    </section>
    
</body>
</html>