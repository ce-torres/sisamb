<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $valorReal = $_POST["valor"] ?? "Valor inexistente";
            echo "<p>Analisando o número informado pelo usuário:<strong> " . number_format($valorReal,3, ",", ".") . "</strong></p>";
            $varInt = (int) $valorReal;
            $valorfracao = $valorReal - $varInt;
            echo " A parte inteira do número é " . $varInt;
         //   echo " A parte fracionada do número é $valorFracao";

        echo "<ul><li>Parte inteira do número é <strong> " . 
             number_format($varInt,0, ",", ".") . "</strong></li>";
        echo "<li>Parte fracionaria do número é <strong> " . 
             number_format($valorfracao,3, ",", ".") . "</strong></li></ul>";
        ?>  
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>