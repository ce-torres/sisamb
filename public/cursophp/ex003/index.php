<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
     //   $num = 300;  // inteiro
     //   echo "O valor da variavel é $num";
     //   $num = 0x1A;  //Hexadecimal
     //   echo "O valor da variavel é $num";
     //   $num = 010;  // octal resultado e 8 cuidado
     //   echo "O valor da variavel é $num";
     //   $v = 300;
     //   var_dump($v);
     //   $v = 45.2;
     //  var_dump($v);
     //   $v = "carlos";
     //   var_dump($v);
     //   $v = 3e2; // 3 x 10(2) = 300 tipo float
     //   var_dump($v);
     //   $v = (string)3e2; // 3 x 10(2) = 300 int
     //   var_dump($v);
     //   $v = (int)"950"; // transforma o tipo sttring para int
     //   var_dump($v);
     //   $casado = false; 
     //   var_dump($casado);
     //   echo "voce e casado? $casado"; // vai exibir vazio
     //   $casado = true; // 
     //   var_dump($casado);
     //   echo "voce e casado? $casado"; // vai exibir 1
       
     //   $vet = [6, 2.5, "Maria", 3, false];// vetor
     //   var_dump($vet);
       
        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa; // object
        var_dump($p);

       // echo "voce e casado? $vet";

    ?>
</body>
</html>