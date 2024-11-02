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
        <h1>Resultado Final</h1>
        <p>
         <?php 
            $numero = $_GET["numero"] ?? "Número inexistente";
            $numAnt = $numero - 1;
            $numSuc = $numero + 1;
            echo "O número escolhido foi <strong>$numero</strong>";
            echo "<br><em>O seu antecessor é </em><strong>$numAnt</strong>";
            echo "<br><em>O seu sucessor é </em><strong>$numSuc</strong>";
        ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; voltar</button>
    </main>
</body>
</html>