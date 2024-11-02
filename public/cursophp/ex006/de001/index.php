<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01 Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor   = $_GET['divisor'] ?? 1;
    ?>    
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="iddividendo" min="0" value="<?=$dividendo?>"> 
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="iddivisor" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <?php 
            $res =  intdiv($dividendo, $divisor);
            $resto = $dividendo - ($res * $divisor); 
            $teste = $_SERVER['PHP_SELF']; 
        ?>
        <h2>Estrutura da divisão</h2> 
        <?="<p>Dividendo $dividendo"?> 
        <?="<br>Divisor $divisor"?>
        <?="<br>Resto $resto"?>
        <?="<br>Resultado $res</p>"?>
        <?="<br>Fonte $teste"?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$res?></td>
            </tr>

        </table>

    </section>
    
</body>
</html>