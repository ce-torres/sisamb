<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05/08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $anob = date('Y');
        $anon = $_GET['anon'] ?? 0;
        $anoa = $_GET['anoa'] ?? $anob; 
    ?>
    <main>
        <h1>Calcular a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" Method="get">
              <label for="anon">Em que ano você Nasceu?</label>
              <input type="number" name="anon" id="idanon" min="1900" max="<?=$anob-1?>" value="<?=$anon?>">
              <label for="anoa">Quer saber sua idade em que ano? (atualmente estamos em 2024)</label>
              <input type="number" name="anoa" id="idanoa" min="1900" value="<?=$anoa?>">
              <input type="submit" value="Qual sera minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $resu = $anoa - $anon;
            $anob = date('Y');
            print "<p>Quem nasceu em " . $anon . " vai ter <strong>" . $resu . " anos</strong> em " . $anoa ."!</p>"; 
        ?>
    </section>
    
</body>
</html>