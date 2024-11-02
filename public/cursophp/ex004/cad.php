<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main> 
        <?php 
            $nome  = $_GET["nome"]  ?? "Nome inexistente";
            $snome = $_GET["snome"] ?? "Sobrenome inexistente";
            echo "<p> É um prazer te conhecer,<strong> $nome $snome</strong>! Este é o meu site! ";
        ?>
           <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>

    
</body>
</html>