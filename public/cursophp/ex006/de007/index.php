<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07/08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

function connection()
{
	$pdo = new PDO('mysql:host=localhost;dbname=sislix', 'root', '');
	return $pdo;
}

function getData($table)
{
	$connection = connection();
	$query = $connection->query("select * from {$table}");
	$query->execute();
	return $query->fetchall();
}

var_dump(getData('cliente'));




    <?php 
        $segundos = $_GET['segundos'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o tempo de segundos?</label>
            <input type="number" name="segundos" id="idsegundos" value="<?=$segundos?>">
            <input type="submit" value="Calcular">

        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 

            $sem = (int) ($segundos / 604800); 
            $resto1 = $segundos % 604800;

            $dia = (int) ($resto1 / 86400);    
            $resto2 = $resto1 % 86400;

            $hor = (int) ($resto2 / 3600);
            $resto3 = $resto2 % 3600;

            $min = (int) ($resto3 / 60);
            $seg = $resto3 % 60;
             
            print "<p>Analizando o valor que você digitou, 450 segundos equivalem a um total de:</p>";
            print "<ul><li>0 Semanas $sem $resto1</li>";
            print "<li>0 Dias $dia $resto2</li>";
            print "<li>0 Horas $hor $resto3</li>";
            print "<li>0 Minutos $min</li>";
            print "<li>0 Segundos $seg</li></ul>";

        ?>
    </section>
    
</body>
</html>